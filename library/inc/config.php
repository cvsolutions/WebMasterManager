<?php

/** Start new or resume existing session */
session_start();

/** Sets which PHP errors are reported */
ini_set('display_errors', 0);

/** Set locale information */
setlocale(LC_ALL, 'it_IT');

/** Set Request Params */
$action = trim($_GET['action']);
$host   = trim($_GET['host']);
$ID     = trim($_GET['id']);

/** Global Configuration */
$config['name']    = 'Webmaster Manager';
$config['version'] = '1.0';
$config['refresh'] = 1;
$config['language'] = 'en';
$config['server']  = sprintf('http://%s', $_SERVER['SERVER_NAME']);

/** MySQL Connectors */
$config['connection']['pdo']  = 'mysql:host=localhost;dbname=webmastermanager';
$config['connection']['user'] = 'root';
$config['connection']['pass'] = 'rootpass';

/** Enable local login */
$config['login']['enable'] = true;

/** Type Hosting */
$config['hosting'] = array(
	1 => 'Linux', 
	2 => 'Windows', 
	3 => 'Altro'
	);

/** Type Account */
$config['account'] = array(
	1 => 'Generico', 
	2 => 'Facebook', 
	3 => 'Twitter', 
	4 => 'Posta elettronica', 
	5 => 'Google Accounts', 
	6 => 'Content management system', 
	7 => 'ShinyStat', 
	8 => 'YouTube', 
	9 => 'cPanel', 
	10 => 'phpMyAdmin', 
	11 => 'FTP', 
	12 => 'Dropbox', 
	13 => 'iCloud', 
	14 => 'Flickr',
	15 => 'Database',
	16 => 'Webmail Online',
	17 => 'GitHub',
	18 => 'LinkedIn',
	19 => 'Pinterest'
	);

/** Type Provider */
$config['provider'] = array(
	1 => 'Servitel', 
	2 => 'Register', 
	3 => 'Altervista', 
	4 => 'Aruba', 
	5 => 'Hostek', 
	6 => 'Serverplan', 
	7 => 'Hostingsolutions', 
	8 => 'Netsons', 
	9 => 'Shellrent', 
	10 => 'Dreamhost', 
	11 => 'Aplus', 
	12 => '9Net', 
	13 => 'OVH', 
	14 => 'Altro'
	);

/** Type Status */
$config['status'] = array(
	0 => 'Sospeso',
	1 => 'Attivo'
	);

/** Type Databases */
$config['databases'] = array(
	1 => 'MySql',
	2 => 'PostgreSQL',
	3 => 'SQLite',
	4 => 'Oracle',
	5 => 'Microsoft Access',
	6 => 'Microsoft SQL Server',
	7 => 'Altro'
	);

/** Type secure File transfer */
$config['transfer'] = array(
	1 => 'Predefinita',
	2 => 'Attiva',
	3 => 'Passiva'
	);

/** Type type_ftp */
$config['type_ftp'] = array(
	1 => 'FTP',
	2 => 'SFTP',
	3 => 'SSH'
	);

/** Core Libraries Group */
include_once 'library/class/WebMasterManager.php';
include_once 'library/class/WebMasterSettings.php';
include_once 'library/class/WebMasterHosting.php';
include_once 'library/class/WebMasterAccount.php';
include_once 'library/class/phpmailer.class.php';
include_once 'library/smarty/Smarty.class.php';
