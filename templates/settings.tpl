{include file="header.tpl"}

<!-- container -->
<div class="container">

	{assign var="navactive_2" value="active"}
	{include file="navbar.tpl"}

	<!-- header -->
	<div class="page-header">
		<h1>WM <small>Configurazione</small></h1>
		<p>Modifica le impostazioni dell'account e i parametri di funzionamento</p>
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
			<label class="control-label" for="name">Nome & Cognome</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input" value="{$row.name}" id="name" name="name">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="usermail">Indirizzo E-mail</label>
			<div class="controls">
				<input type="email" class="validate[required,custom[email]]" value="{$row.usermail}" id="usermail" name="usermail">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pwd">Password</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input" value="{$row.pwd}" id="pwd" name="pwd">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="signature">Firma E-mail</label>
			<div class="controls">
				<textarea class="field span7" rows="13" name="signature" id="signature">{$row.signature}</textarea>
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