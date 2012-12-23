<?php

include_once 'library/inc/config.php';

try {

	/** @var WebMasterManager [WM] */
	$Manager = new WebMasterManager();

	/** @var WebMasterSettings [Global Settings] */
	$Settings = new WebMasterSettings();
	$Settings->isLogged();
	$Settings->SignOut();

	/** @var WebMasterHosting [Info Hosting] */
	$Hosting = new WebMasterHosting();

	/** @var Smarty [PHP Template Engine] */
	$Smarty = new Smarty();
	$Smarty->assign('expiry', $Hosting->ShowDashboardHosting('ORDER BY expiry ASC', 10));
	$Smarty->assign('registered', $Hosting->ShowDashboardHosting('ORDER BY registered DESC', 10));
	$Smarty->assign('config', $config);
	$Smarty->assign('cnt_host', $Manager->ShowDrawChartHosting('wm_hosting', ''));
	$Smarty->assign('cnt_account', $Manager->ShowDrawChartHosting('wm_account', ''));
	$Smarty->assign('cnt_host_active', $Manager->ShowDrawChartHosting('wm_hosting', 'WHERE status = 1'));
	$Smarty->assign('cnt_host_suspended', $Manager->ShowDrawChartHosting('wm_hosting', 'WHERE status = 0'));
	$Smarty->assign('cnt_host_expiry', $Manager->ShowDrawChartHosting('wm_hosting', 'WHERE expiry = CURDATE()'));
	$Smarty->display('dashboard.tpl');
	
} catch (Exception $e) {
	exit($e->getMessage());
}

