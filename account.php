<?php

include_once 'library/inc/config.php';

try {

	/** @var WebMasterSettings [Global Settings] */
	$Settings = new WebMasterSettings();
	$Settings->isLogged();

	/** @var WebMasterAccount [Info Account] */
	$Account = new WebMasterAccount();
	$Account->id_host = $host;

	/** @var WebMasterHosting [Info Hosting] */
	$Hosting = new WebMasterHosting();
	$Hosting->id_hosting = $host;

	/** @var Smarty [PHP Template Engine] */
	$Smarty = new Smarty();
	$Smarty->assign('config', $config);
	$Smarty->assign('language', $Settings->loadLanguage());

	if(empty($action))
	{
		throw new Exception("Invalid parameters QueryString", 1);
	}

	switch ($action)
	{
		/** New Account */
		case 'new':
		if($_POST)
		{
			$Account->NewAccount($_POST);
			header(sprintf('refresh:%d;url=account.php?action=view&host=%d', $config['refresh'], $host));
		}
		$Smarty->assign('host', $Hosting->DetailHosting());
		$Smarty->display('edit_account.tpl');
		break;

		/** View Full Account */
		case 'view':
		$Smarty->assign('host', $Hosting->DetailHosting());
		$Smarty->assign('result', $Account->ShowAccount());
		$Smarty->display('view_account.tpl');
		break;

		/** Edit Account */
		case 'edit':
		$Account->id_account = $ID;
		if($_POST)
		{
			$Account->EditAccount($_POST);
			header(sprintf('refresh:%d;url=account.php?action=view&host=%d', $config['refresh'], $host));
		}
		$Smarty->assign('row', $Account->DetailAccount());
		$Smarty->assign('host', $Hosting->DetailHosting());
		$Smarty->display('edit_account.tpl');
		break;

		/** Delete Account */
		case 'delete':
		$Account->id_account = $ID;
		$Account->DeleteAccount();
		header(sprintf('refresh:%d;url=account.php?action=view&host=%d', $config['refresh'], $host));
		exit();
		break;
	}
	
} catch (Exception $e) {
	exit($e->getMessage());
}