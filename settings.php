<?php

include_once 'library/inc/config.php';

try {

	/** @var WebMasterSettings [Global Settings] */
	$Settings = new WebMasterSettings();
	$Settings->SignOut();

	if($_POST)
	{
		/** edit Configurazione */
		$Settings->SettingsManager($_POST);
		header(sprintf('refresh:%d;url=dashboard.php', $config['refresh']));
	}

	/** @var Smarty [PHP Template Engine] */
	$Smarty = new Smarty();
	$Smarty->assign('config', $config);
	$Smarty->assign('language', $Settings->loadLanguage());
	$Smarty->assign('row', $Settings->getSettings());
	$Smarty->display('settings.tpl');
	
} catch (Exception $e) {
	exit($e->getMessage());
}

