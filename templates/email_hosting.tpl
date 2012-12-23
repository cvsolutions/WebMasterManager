{include file="header.tpl"}

<!-- container -->
<div class="container">

	{include file="navbar.tpl"}

	<!-- header -->
	<div class="page-header">
		<h1>Sending Email <small>{$row.name}</small></h1>
		<p>Spedisci i dati del dominio al cliente</p>
	</div>

	<!-- sub menu -->
	<ul class="pager">
		<li><a href="hosting.php?action=view">Domini & Hosting</a></li>
		<li><a href="hosting.php?action=detail&id={$smarty.get.id}">Visualizza {$row.name}</a></li>
		<li><a href="account.php?action=view&host={$smarty.get.id}">Visualizza Account</a></li>
		<li><a href="export.php?host={$smarty.get.id}">Export in PDF</a></li>
	</ul>

	{if $smarty.post}
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Operazione eseguita con successo!</strong>
	</div>
	{/if}

	<form action="" class="form-horizontal" id="validation" method="post" accept-charset="utf-8">

		<!-- table -->
		<table class="table table-bordered">

			<thead>
				<tr>
					<th>Account</th>
					<th>Spedire</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>FTP</td>
					<td>{html_checkboxes name='sending_ftp' selected=$row.sending_ftp values='1'}</td>
				</tr>

				{if $row.type_db gt 0}
				<tr>
					<td>Database MySQL</td>
					<td>{html_checkboxes name='sending_db' selected=$row.sending_db values='1'}</td>
				</tr>
				{/if}

				{if $row.host_email}
				<tr>
					<td>E-mail</td>
					<td>{html_checkboxes name='sending_email' selected=$row.sending_email values='1'}</td>
				</tr>
				{/if}

				{foreach item="account" from=$result}
				<tr>
					<td>{$account.account_type}</td>
					<td>{html_checkboxes name="sending[{$account.id}]" selected=$account.sending values='1'}</td>
				</tr>
				{/foreach}

				<tr class="error">
					<td><b>Inviare email regolarmente</b></td>
					<td><input type="text" class="validate[custom[email]] text-input input-xlarge" value="{$row.host_email}" id="host_email" name="host_email"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" class="btn btn-primary">Invia Email</button></td>
				</tr>

			</tbody>
		</table>

	</form>

	<!-- copyright -->
	{include file="copyright.tpl"}
	
</div>

{include file="footer.tpl"}