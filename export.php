<?php

include_once 'library/inc/config.php';
include_once 'library/fpdf/WriteHTML.php';

try {

	/** @var WebMasterSettings [Global Settings] */
	$Settings = new WebMasterSettings();
	$Settings->isLogged();

	/** @var WebMasterHosting [Info Hosting] */
	$Hosting = new WebMasterHosting();
	$Hosting->id_hosting = $ID;
	$row = $Hosting->DetailHosting();

	/** @var WebMasterAccount [Info Account] */
	$Account = new WebMasterAccount();
	$Account->id_host = $ID;
	$row_account = $Account->ShowAccount();

	/** Output */
	$string = sprintf('<p>RIEPILOGO DATI DOMINO & HOSTING</p>');
	$string .= sprintf('<br>');
	$string .= sprintf('<br>');
	$string .= sprintf('%s', $row['domain']);
	$string .= sprintf('<br>');

	if($row['sending_ftp'] == 1)
	{
		$string .= sprintf('<br><b>FTP</b>');
		$string .= sprintf('<br>Tipologia: %s', $config['type_ftp'][$row['type_ftp']]);
		$string .= sprintf('<br>Indirizzo / IP: %s', $row['host_ftp']);
		$string .= sprintf('<br>Username: %s', $row['user_ftp']);
		$string .= sprintf('<br>Password: %s', $row['pwd_ftp']);
		$string .= sprintf('<br>Porta: %s', $row['port_ftp']);
		$string .= sprintf('<br>Modalita\' di trasferimento: %s', $config['transfer'][$row['transfer_ftp']]);
		$string .= sprintf('<br>');
	}

	if($row['sending_db'] == 1)
	{
		$string .= sprintf('<br><b>Database</b>');
		$string .= sprintf('<br>Tipologia: %s', $config['databases'][$row['type_db']]);
		$string .= sprintf('<br>Host / IP: %s', $row['host_db']);
		$string .= sprintf('<br>Username: %s', $row['user_db']);
		$string .= sprintf('<br>Password: %s', $row['pwd_db']);
		$string .= sprintf('<br>');
	}
	
	if($row['sending_email'] == 1)
	{
		$string .= sprintf('<br><b>E-mail</b>');
		$string .= sprintf('<br>Indirizzo E-mail: %s', $row['host_email']);
		$string .= sprintf('<br>Password: %s', $row['pwd_email']);
		$string .= sprintf('<br>Server IMAP: %s', $row['imap_email']);
		$string .= sprintf('<br>Server POP3: %s', $row['pop_email']);
		$string .= sprintf('<br>Server SMTP: %s', $row['smtp_email']);
		$string .= sprintf('<br>');
	}

	foreach ($row_account as $rc)
	{
		if($rc['sending'] == 1)
		{
			$string .= sprintf('<br><b>Account %s</b>', $rc['account_type']);
			$string .= sprintf('<br>Username: %s', $rc['username']);
			$string .= sprintf('<br>Password: %s', $rc['password']);
			$string .= sprintf('<br>');
		}
	}

	/** @var PDF_HTML [Export to PDF] */
	$pdf = new PDF_HTML();
	$pdf->SetFont('Arial');
	$pdf->AddPage();
	$pdf->WriteHTML($string);
	$pdf->Output(sprintf('%s.pdf', $row['name']), 'D');
	// echo $string;

} catch (Exception $e) {
	exit($e->getMessage());
}