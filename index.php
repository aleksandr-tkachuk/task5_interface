<?php

include_once './config/config.php';
include_once './libs/iWorkData.php';
include_once './libs/session.php';
include_once './libs/msql.php';
include_once './libs/cookie.php';
//include_once './libs/postgreSql.php';


$key = "user";
$value = "John Doe";

$cookies = new Cookie();
$cookies->saveData($key, $value);

$session = new Session();
$getSession = $session->saveData($key, $value);

$msql = new Msql(HOST, USER, PASSWORD);
$msql->saveData($key, $value);


//$msql -> deleteData('John Doe');
//$postgre = new PostgreSql(HOST, USER_POSTRE, PASSWORD);
//$postgre -> getData($key);

include_once 'templates/index.php';
