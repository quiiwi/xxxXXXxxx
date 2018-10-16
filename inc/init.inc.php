<?php

$text = '';
$URL = '';
$URL_COURRANT = ' ';
$alert = '';
$titre1 = 'Autres';

$pdo = new PDO('mysql:host=localhost;dbname=quiiwi_site_cv', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$pdo2 = new PDO('mysql:host=localhost;dbname=competences', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

session_start();

define('RACINE_SITE', '/PHP/xXx/');

require_once('fonctions.inc.php');
?>