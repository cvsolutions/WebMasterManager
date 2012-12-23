<?php

include_once 'library/inc/config.php';

try {

	if($_POST)
	{
		$usermail = trim($_POST['usermail']);

		/** @var WebMasterSettings [Global Settings] */
		$Settings = new WebMasterSettings();
		$Settings->CheckMail($usermail);
		header(sprintf('refresh:%d;url=index.php', $config['refresh']));
	}
	
} catch (Exception $e) {
	exit($e->getMessage());
}