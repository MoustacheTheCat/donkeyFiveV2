<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?php if (isset($data['seo']['title'])):?> 
				<?=$data['seo']['title'] . ' - Donkey Five'; ?>
			<?php endif;?>
		</title>
			<?php if (isset($data['seo']['description'])) : ?>
				<meta name="description" content="<?= $data['seo']['description'] ?>">
			<?php endif; ?>
			<link rel="stylesheet" type="text/css" href="css/app.css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
			
	</head>
	<body class="container-fluid px-0 overflow-auto">
		<?php include 'templates/partials/_header.php'; ?>
		<main>
			<?php require $templatePath ?>
		</main>
		<?php include 'templates/partials/_footer.php'; ?>
		<script type="text/javascript" src="js/app.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	</body>
</html>


	
		