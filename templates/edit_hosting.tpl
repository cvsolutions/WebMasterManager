{include file="header.tpl"}

<!-- container -->
<div class="container">

	{assign var="navactive_3" value="active"}
	{include file="navbar.tpl"}

	<!-- header -->
	<div class="page-header">
		<h1>Dominio <small>Hosting</small></h1>
		<p>Registrazione di un nuovo dominio</p>
	</div>

	{if $smarty.post}
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Operazione eseguita con successo!</strong>
	</div>
	{/if}

	<!-- form -->
	<form action="" class="form-horizontal" id="validation" method="post" accept-charset="utf-8">

		<div class="control-group">
			<label class="control-label" for="name">Nome sito Web</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="{$row.name}" id="name" name="name">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="domain">Dominio</label>
			<div class="controls">
				<input type="text" class="validate[required,custom[url]] input-xlarge" value="{$row.domain}" id="domain" name="domain">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="expiry">Scadenza</label>
			<div class="controls">
				<input type="text" readonly class="validate[required] text-input datepicker" value="{$row.expiry|date_format:"%d-%m-%Y"}" id="expiry" name="expiry">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="provider">Provider</label>
			<div class="controls">
				<select class="validate[required] text-input" id="provider" name="provider">
					<option value="">-</option>
					{html_options options=$config.provider selected=$row.provider}
				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="host_type">Hosting</label>
			<div class="controls">
				<select class="validate[required] text-input" id="host_type" name="host_type">
					<option value="">-</option>
					{html_options options=$config.hosting selected=$row.host_type}
				</select>
			</div>
		</div>

		<div class="page-header">
			<h1><small>FTP</small></h1>
		</div>

		<div class="control-group">
			<label class="control-label" for="type_ftp">Protocollo</label>
			<div class="controls">
				<select class="validate[required] text-input" id="type_ftp" name="type_ftp">
					<option value="">-</option>
					{html_options options=$config.type_ftp selected=$row.type_ftp}
				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="host_ftp">Indirizzo / IP</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="{$row.host_ftp}" id="host_ftp" name="host_ftp">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="user_ftp">Username</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="{$row.user_ftp}" id="user_ftp" name="user_ftp">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pwd_ftp">Password</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="{$row.pwd_ftp}" id="pwd_ftp" name="pwd_ftp">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="port_ftp">Porta</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input" value="{$row.port_ftp}" id="port_ftp" name="port_ftp">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="transfer_ftp">Modalità di trasferimento</label>
			<div class="controls">
				<select class="validate[required] text-input" id="transfer_ftp" name="transfer_ftp">
					<option value="">-</option>
					{html_options options=$config.transfer selected=$row.transfer_ftp}
				</select>
			</div>
		</div>

		<div class="page-header">
			<h1><small>Database</small></h1>
		</div>

		<div class="control-group">
			<label class="control-label" for="type_db">Tipologia</label>
			<div class="controls">
				<select id="type_db" name="type_db">
					<option value="">-</option>
					{html_options options=$config.databases selected=$row.type_db}
				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="host_db">Host / IP</label>
			<div class="controls">
				<input type="text" value="{$row.host_db}" class="input-xlarge" id="host_db" name="host_db">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="user_db">Username</label>
			<div class="controls">
				<input type="text" value="{$row.user_db}" class="input-xlarge" id="user_db" name="user_db">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pwd_db">Password</label>
			<div class="controls">
				<input type="text" value="{$row.pwd_db}" class="input-xlarge" id="pwd_db" name="pwd_db">
			</div>
		</div>

		<div class="page-header">
			<h1><small>E-mail</small></h1>
		</div>

		<div class="control-group">
			<label class="control-label" for="host_email">Indirizzo E-mail</label>
			<div class="controls">
				<input type="text" class="validate[custom[email]] input-xlarge" value="{$row.host_email}" id="host_email" name="host_email">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pwd_email">Password</label>
			<div class="controls">
				<input type="text" value="{$row.pwd_email}" class="input-xlarge" id="pwd_email" name="pwd_email">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="imap_email">Server IMAP</label>
			<div class="controls">
				<input type="text" value="{$row.imap_email}" class="input-xlarge" id="imap_email" name="imap_email">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pop_email">Server POP3</label>
			<div class="controls">
				<input type="text" value="{$row.pop_email}" class="input-xlarge" id="pop_email" name="pop_email">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="smtp_email">Server SMTP</label>
			<div class="controls">
				<input type="text" value="{$row.smtp_email}" class="input-xlarge" id="smtp_email" name="smtp_email">
			</div>
		</div>

		<div class="page-header">
			<h1><small>Altro</small></h1>
		</div>

		<div class="control-group">
			<label class="control-label" for="information">Note Aggiuntive</label>
			<div class="controls">
				<textarea class="field span7" rows="13" name="information" id="information">{$row.information}</textarea>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="auth_info">Auth-Code</label>
			<div class="controls">
				<input type="text" value="{$row.auth_info}" class="input-xlarge" id="auth_info" name="auth_info">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="status">Stato</label>
			<div class="controls">
				<select class="validate[required] text-input" id="status" name="status">
					<option value="">-</option>
					{html_options options=$config.status selected=$row.status}
				</select>
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary">Salva</button>
			</div>
		</div>

	</form>

	<!-- copyright -->
	{include file="copyright.tpl"}

</div>

{include file="footer.tpl"}