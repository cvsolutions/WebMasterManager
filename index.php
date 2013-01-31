<?php

include_once 'library/inc/config.php';

try {

	/** @var WebMasterSettings [Global Settings] */
	$Settings = new WebMasterSettings();
	$Settings->loadInstall();

	if($config['login']['enable'] === true)
	{
		if($_POST)
		{
			$usermail = trim($_POST['usermail']);
			$pwd = trim($_POST['pwd']);

			/** check Login */
			$Settings->AuthManager($usermail, $pwd);
		}

		/** @var Smarty [PHP Template Engine] */
		$Smarty = new Smarty();
		$Smarty->assign('config', $config);
		$Smarty->assign('language', $Settings->loadLanguage());
		$Smarty->display('index.tpl');
		
	} else {

		header(sprintf("Location: %s", $Settings->valid_location));
		exit();
	}

} catch (Exception $e) {
	exit($e->getMessage());
}