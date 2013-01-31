<?php

include_once 'library/inc/config.php';

try {

	/** @var WebMasterSettings [Global Settings] */
	$Settings = new WebMasterSettings();
	$Settings->isLogged();

	/** @var Smarty [PHP Template Engine] */
	$Smarty = new Smarty();
	$Smarty->assign('config', $config);
	$Smarty->assign('language', $Settings->loadLanguage());

	/** @var WebMasterHosting [Info Hosting] */
	$Hosting = new WebMasterHosting();

	/** @var WebMasterAccount [Info Account] */
	$Account = new WebMasterAccount();
	$Account->id_host = $ID;

	if(empty($action))
	{
		throw new Exception("Invalid parameters QueryString", 1);
	}

	switch ($action)
	{
		/** New Domain */
		case 'new':
		if($_POST)
		{
			$Hosting->NewHosting($_POST);
			header(sprintf('refresh:%d;url=dashboard.php', $config['refresh']));
		}
		$Smarty->display('edit_hosting.tpl');
		break;

		/** Detail Hosting / Domain & Account */
		case 'detail':
		$Hosting->id_hosting = $ID;
		$Smarty->assign('row', $Hosting->DetailHosting());
		$Smarty->assign('result', $Account->ShowAccount());
		$Smarty->display('detail_hosting.tpl');
		break;

		/** Send Email Domain */
		case 'email':
		$Hosting->id_hosting = $ID;
		if($_POST)
		{
			// print_r($_POST);
			$host_email = trim($_POST['host_email']);

			$Hosting->EditSendingHosting($_POST);
			$Account->EditSendingAccount($_POST);
			$Hosting->SendingHostingEmail($host_email);
			header(sprintf('refresh:%d;url=hosting.php?action=view', $config['refresh']));
		}
		$Smarty->assign('row', $Hosting->DetailHosting());
		$Smarty->assign('result', $Account->ShowAccount());
		$Smarty->display('email_hosting.tpl');
		break;

		/** View Domain */
		case 'view':
		$Smarty->assign('result', $Hosting->ShowHosting());
		$Smarty->display('view_hosting.tpl');
		break;

		/** Edit Domain */
		case 'edit':
		$Hosting->id_hosting = $ID;
		if($_POST)
		{
			$Hosting->EditHosting($_POST);
			header(sprintf('refresh:%d;url=hosting.php?action=view', $config['refresh']));
		}
		$Smarty->assign('row', $Hosting->DetailHosting());
		$Smarty->display('edit_hosting.tpl');
		break;

		/** Delete Domain & Account */
		case 'delete':
		$Hosting->id_hosting = $ID;
		$Hosting->DeleteHosting();
		header(sprintf('Location: hosting.php?action=view'));
		exit();
		break;
	}
	
} catch (Exception $e) {
	exit($e->getMessage());
}