<?php

namespace DonkeyFive\Manager;

require dirname(__DIR__, 2) . '/config/database.php';
require dirname(__DIR__, 2) . '/config/querys.php';
require dirname(__DIR__, 2) . '/config/messages.php';
require dirname(__DIR__, 2) . '/config/homecards.php';
abstract class AbstractManager {

	private array $querys;
	private array $countrys;
	private array $messages;
	private array $homeCards;


	public function __construct() {
		$this->querys = QUERYS;
		$this->countrys = [
            "France", "Germany", "Italy", "Spain", "United Kingdom", "Netherlands",
            "Belgium", "Sweden", "Poland", "Switzerland", "Norway", "Denmark",
            "Finland", "Austria", "Portugal", "Greece", "Ireland", "Czech Republic",
            "Hungary", "Croatia", "United States", "Canada", "Australia", "India", "China"
        ];
		$this->homeCards = HOMECARDS;
	}
	public function getAllQuerys (){
		return $this->querys;
	}

	public function getAllCountrys() {
		return $this->countrys;
	}

	public function getAllMessages() {
		return $this->messages;
	}

	public function getAllHomeCards(){
        return $this->homeCards;
    }


	private function connect(): \PDO {
		$db = new \PDO(DB_DSN, DB_USER, DB_PASS, DB_OPTIONS);
		$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES utf8");
		return $db;
		
	}

    private function executeQuery(string $query, array $params = []): \PDOStatement {
		$db = $this->connect();
		$stmt = $db->prepare($query);
		foreach ($params as $key => $param) $stmt->bindValue($key, $param);
		$stmt->execute();
		return $stmt;
	}

    private function classToTable(string $class): string {
		$tmp = explode('\\', $class);
		return strtolower(end($tmp));
	}

	protected function readOne(string $class, array $filters): mixed {
		$query = 'SELECT * FROM ' . $this->classToTable($class) . ' WHERE ';
		foreach (array_keys($filters) as $filter) {
			$query .= $filter . " = :" . $filter;
			if ($filter != array_key_last($filters)) $query .= 'AND ';
		}
		$stmt = $this->executeQuery($query, $filters);
		$stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
		return $stmt->fetch();
	}

	protected function readMany(string $class, array $filters = [], array $order = [], int $limit = null, int $offset = null): mixed {
		$query = 'SELECT * FROM ' . $this->classToTable($class);
		if (!empty($filters)) {
			$query .= ' WHERE ';
			foreach (array_keys($filters) as $filter) {
				$query .= $filter . " = :" . $filter;
				if ($filter != array_key_last($filters)) $query .= 'AND ';
			}
		}
		if (!empty($order)) {
			$query .= ' ORDER BY ';
			foreach ($order as $key => $val) {
				$query .= $key . ' ' . $val;
				if ($key != array_key_last($order)) $query .= ', ';
			}
		}
		if (isset($limit)) {
			$query .= ' LIMIT ' . $limit;
			if (isset($offset)) {
				$query .= ' OFFSET ' . $offset;
			}
		}
		$stmt = $this->executeQuery($query, $filters);
		$stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
		return $stmt->fetchAll();
	}

	protected function readManyByQueryPerso(string $class, string $query = ""){
		$stmt = $this->executeQuery($query);
		$stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
		return $stmt->fetchAll();
	}

	protected function readManyByQueryPersoAndParam(string $class, string $query = "", array $filters = []){
		
		$stmt = $this->executeQuery($query, $filters);
		$stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
		return $stmt->fetchAll();
		
	}

	public function findAllEmailAndNumber(string $class, array $params = []){
        return $this->readManyByQueryPerso($class, $params);
    }

	public function findByEmail(string $class, array $params = []): mixed {
        return $this->readOne($class, $params);
    }

	protected function create(string $class, array $fields): \PDOStatement {
		$query = "INSERT INTO " . $this->classToTable($class) . " (";
		foreach (array_keys($fields) as $field) {
			$query .= $field;
			if ($field != array_key_last($fields)) $query .= ', ';
		}
		$query .= ') VALUES (';
		foreach (array_keys($fields) as $field) {
			$query .= ':' . $field;
			if ($field != array_key_last($fields)) $query .= ', ';
		}
		$query .= ')';
		return $this->executeQuery($query, $fields);
	}

	protected function update(string $class, array $fields, array $id): \PDOStatement {
		$query = "UPDATE " . $this->classToTable($class) . " SET ";
		foreach (array_keys($fields) as $field) {
			$query .= $field . " = :" . $field;
			if ($field != array_key_last($fields)) $query .= ', ';
		}
		$query .= ' WHERE '.array_keys($id)[0].' = :'.array_keys($id)[0];
		
		$fields[array_keys($id)[0]] = $id[array_keys($id)[0]];
		return $this->executeQuery($query, $fields);
	}

	

	protected function addPicture(string $class) {
		$dataName = $this->classToTable($class).'Picture';
		$target_dir = "/var/www/html/donkey-five/public/img/".$this->classToTable($class).'/';
		if (!is_dir($target_dir)) {
			mkdir($target_dir, 0755, true);
		}
		
		$target_file = $target_dir. $_FILES[$dataName]['name'];
		$errorArray = $this->validateImageFile($target_file, $dataName);
		if (empty($errorArray) && move_uploaded_file($_FILES[$dataName]["tmp_name"], $target_file)) {
			return basename($target_file);
		} else {
			$errorArray[] = "Sorry, there was an error uploading your file.";
		}
	
		return $errorArray;
	}
	
	public function updatePicture(string $class, array $arrayId) {
		$id = $arrayId[array_keys($arrayId)[0]];
		$data = $this->readOne($class, $arrayId);
		$dataName = $this->classToTable($class).'Picture';
		$method = 'get'.ucfirst($dataName);
		$existingFile = "/var/www/html/donkey-five/public/img/".$this->classToTable($class).'/'.$data->$method();
		if ($data->$method() != $_FILES[$dataName]['name']) {
			$this->removeOldFile($existingFile);
			return $this->addPicture($class);
		}
		return false;
	}
	
	private function validateImageFile($filePath, $dataName) {
		$errorArray = [];
		$check = getimagesize($_FILES[$dataName]["tmp_name"]);
		if ($check === false) $errorArray[] = "File is not an image.";
		if (file_exists($filePath)) $errorArray[] = "File already exists.";
		if ($_FILES[$dataName]["size"] > 500000) $errorArray[] = "File is too large.";
		if (!in_array(pathinfo($filePath, PATHINFO_EXTENSION), ['png', 'jpg', 'jpeg'])) {
			$errorArray[] = "Only PNG, JPG, and JPEG files are allowed.";
		}
		return $errorArray;
	}
	
	private function removeOldFile($filePath) {
		if (file_exists($filePath) && !strpos($filePath, 'default.')) {
			if(unlink($filePath)) {
				return true;
			}
			return false;
		}
	}

	public function delete(string $class, array $id): \PDOStatement {
		$query = "DELETE FROM " . $this->classToTable($class) . " WHERE ";
		foreach (array_keys($id) as $key) {
			$query .= $key . " = :" . $key;
			if ($key != array_key_last($id)) $query .= 'AND ';
		}
		return $this->executeQuery($query, $id);
	}
	
    
	public function sendMail(array $mailDatas){
		$to = $mailDatas['to'];
		$subject = $mailDatas['subject'];
		$message = $this->getAllMessages()[$mailDatas['message']];
		$headers = "From: " . $mailDatas['from'] . "\r\n";
		$headers .= "Reply-To: ". $mailDatas['from'] . "\r\n";
		$headers .= "CC: ".$mailDatas['from']."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";	
		mail($to, $subject, $message, $headers);
	}

	

	

	
	

}