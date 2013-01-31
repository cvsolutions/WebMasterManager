<?php

include_once 'library/inc/config.php';

try {

	/** @var WebMasterSettings [Global Settings] */
	$Settings = new WebMasterSettings();

	if($_POST)
	{
		/** install WM */
		$Settings->install($_POST);
		header(sprintf('refresh:%d;url=index.php', $config['refresh'], $host));
	}
	
	/** @var Smarty [PHP Template Engine] */
	$Smarty = new Smarty();
	$Smarty->assign('config', $config);
	$Smarty->assign('language', $Settings->loadLanguage());
	$Smarty->display('install.tpl');

} catch (Exception $e) {
	exit($e->getMessage());
}