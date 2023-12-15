<?php

const QUERYS = [
    'allCenterCity' => 'SELECT c.centerId, c.centerCity FROM center c',
    'allFieldByCenterId' => 'SELECT f.fieldId,f.fieldName,f.fieldTarifHourHT, f.fieldTarifDayHT FROM center c JOIN field f ON f.centerId = c.centerId  WHERE c.centerId = :centerId',
    'allUserEmailAndNumber' => 'SELECT u.userNumber, u.userEmail FROM user u',
    'allAdminEmailAndNumber' => 'SELECT a.adminNumber, a.adminEmail FROM admin a',
];