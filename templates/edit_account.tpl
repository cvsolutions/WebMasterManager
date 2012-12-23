{include file="header.tpl"}

<!-- container -->
<div class="container">

	{include file="navbar.tpl"}

	<!-- header -->
	<div class="page-header">
		<h1>Account <small>{$host.name}</small></h1>
		<p>Registrazione di un nuovo account per il dominio</p>
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
			<label class="control-label" for="name">Nome Account</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="{$row.name}" id="name" name="name">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="account_type">Tipologia</label>
			<div class="controls">
				<select class="validate[required] text-input" id="account_type" name="account_type">
					<option value="">-</option>
					{html_options options=$config.account selected=$row.account_type}
				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="username">Username</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="{$row.username}" id="username" name="username">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="password">Password</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="{$row.password}" id="password" name="password">
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
			<div class="controls">
				<button type="submit" class="btn btn-primary">Salva</button>
			</div>
		</div>

	</form>

	<!-- copyright -->
	{include file="copyright.tpl"}
	
</div>

{include file="footer.tpl"}