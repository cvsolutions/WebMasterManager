{include file="header.tpl"}

<div class="container">

	<p>Gentile cliente, quì di seguito i dati per amministrare ed accedere ai servizi di {$hosting.domain}</p>
	<p>*** ATTENZIONE LEGGERE E CONSERVARE ***</p>

	{if $hosting.sending_ftp eq 1}
	<p><b>FTP</b></p>
	<ul>
		<li>Tipologia: {$config.type_ftp[$hosting.type_ftp]}</li>
		<li>Indirizzo / IP: {$hosting.host_ftp}</li>
		<li>Username: {$hosting.user_ftp}</li>
		<li>Password: {$hosting.pwd_ftp}</li>
		<li>Porta: {$hosting.port_ftp}</li>
		<li>Modalità di trasferimento: {$config.transfer[$hosting.transfer_ftp]}</li>
	</ul>
	{/if}

	{if $hosting.sending_db eq 1}
	<p><b>Database</b></p>
	<ul>
		<li>Tipologia: {$config.databases[$hosting.type_db]}</li>
		<li>Host / IP: {$hosting.host_db}</li>
		<li>Username: {$hosting.user_db}</li>
		<li>Password: {$hosting.pwd_db}</li>
	</ul>
	{/if}

	{if $hosting.sending_email eq 1}
	<p><b>E-mail</b></p>
	<ul>
		<li>Indirizzo E-mail: {$hosting.host_email}</li>
		<li>Password: {$hosting.pwd_email}</li>
		<li>Server IMAP: {$hosting.imap_email}</li>
		<li>Server POP3: {$hosting.pop_email}</li>
		<li>Server SMTP: {$hosting.smtp_email}</li>
	</ul>
	{/if}

	{foreach item="row" from=$account}
	{if $row.sending eq 1}
	<p><b>Account {$row.account_type}</b></p>
	<ul>
		<li>Username: {$row.username}</li>
		<li>Password: {$row.password}</li>
	</ul>
	{/if}
	{/foreach}

	<hr>
	<p>{$user.signature|nl2br}</p>

</div>

{include file="footer.tpl"}