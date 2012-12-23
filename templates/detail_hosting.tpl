{include file="header.tpl"}

<!-- container -->
<div class="container">

	{include file="navbar.tpl"}

	<!-- header -->
	<div class="page-header">
		<h1>Visualizza <small>{$row.name}</small></h1>
		<p>Mostra le informazioni di registrazione del dominio e degli account collegati</p>
	</div>

	<!-- sub menu -->
	<ul class="pager">
		<li><a href="hosting.php?action=view">Domini & Hosting</a></li>
		<li><a href="hosting.php?action=edit&id={$smarty.get.id}">Modifica {$row.name}</a></li>
		<li><a href="hosting.php?action=email&id={$smarty.get.id}">Sending Email</a></li>
		<li><a href="export.php?id={$smarty.get.id}">Export in PDF</a></li>
	</ul>

	<!-- table -->
	<table class="table table-bordered">

		<tbody>
			<tr class="info">
				<td colspan="2"><b>Hosting</b></td>
			</tr>
			<tr>
				<td>Nome sito Web</td>
				<td>{$row.name}</td>
			</tr>
			<tr>
				<td>Dominio</td>
				<td>{$row.domain}</td>
			</tr>
			<tr>
				<td>Scadenza</td>
				<td>{$row.expiry|date_format:"%d-%m-%Y"}</td>
			</tr>
			<tr>
				<td>Provider</td>
				<td>{$config.provider[$row.provider]}</td>
			</tr>
			<tr>
				<td>Hosting</td>
				<td>{$config.hosting[$row.host_type]}</td>
			</tr>
			<tr>
				<td>Stato</td>
				<td>{$config.status[$row.status]}</td>
			</tr>

			{if $row.auth_info}
			<tr>
				<td>Auth-Code</td>
				<td>{$row.auth_info}</td>
			</tr>
			{/if}

			<tr class="info">
				<td colspan="2"><b>FTP</b></td>
			</tr>
			<tr>
				<td>Tipologia</td>
				<td>{$config.type_ftp[$row.type_ftp]}</td>
			</tr>
			<tr>
				<td>Indirizzo / IP</td>
				<td>{$row.host_ftp}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>{$row.user_ftp}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>{$row.pwd_ftp}</td>
			</tr>
			<tr>
				<td>Porta</td>
				<td>{$row.port_ftp}</td>
			</tr>
			<tr>
				<td>Modalità di trasferimento</td>
				<td>{$config.transfer[$row.transfer_ftp]}</td>
			</tr>

			{if $row.type_db gt 0}
			<tr class="info">
				<td colspan="2"><b>Database</b></td>
			</tr>
			<tr>
				<td>Tipologia</td>
				<td>{$config.databases[$row.type_db]}</td>
			</tr>
			<tr>
				<td>Host / IP</td>
				<td>{$row.host_db}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>{$row.user_db}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>{$row.pwd_db}</td>
			</tr>
			{/if}

			{if $row.host_email}
			<tr class="info">
				<td colspan="2"><b>E-mail</b></td>
			</tr>
			<tr>
				<td>Indirizzo E-mail</td>
				<td>{$row.host_email}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>{$row.pwd_email}</td>
			</tr>
			<tr>
				<td>Server IMAP</td>
				<td>{$row.imap_email}</td>
			</tr>
			<tr>
				<td>Server POP3</td>
				<td>{$row.pop_email}</td>
			</tr>
			<tr>
				<td>Server SMTP</td>
				<td>{$row.smtp_email}</td>
			</tr>
			{/if}

			<!-- loop account -->
			{foreach item="account" from=$result}
			<tr class="info">
				<td colspan="2"><b>Account {$account.account_type}</b></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>{$account.username}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>{$account.password}</td>
			</tr>
			{if $account.information}
			<tr>
				<td>Note</td>
				<td>{$account.information|nl2br}</td>
			</tr>
			{/if}
			{/foreach}
			<!-- loop account -->

			{if $row.information}
			<tr class="info">
				<td colspan="2"><b>Note Aggiuntive</b></td>
			</tr>
			<tr>
				<td colspan="2">{$row.information|nl2br}</td>
			</tr>
			{/if}

		</tbody>

	</table>

	<!-- copyright -->
	{include file="copyright.tpl"}

</div>

{include file="footer.tpl"}