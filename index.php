<?php
$db="configurationposte";
$dbhost="localhost";
$dbport=3080;
$dbuser="root";
$dbpasswd="root";

$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");

$stmt = $pdo->prepare("SELECT name FROM helloworld");
$stmt->execute();

$res = $stmt->fetch();

//Hello World
echo $res[0];
