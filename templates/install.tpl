{include file="header.tpl"}

<!-- container -->
<div class="container">

	{if $smarty.post}
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Operazione eseguita con successo!</strong>
	</div>
	{/if}

	<!-- form -->
	<form action="" class="form-signin" id="validation" method="post" accept-charset="utf-8">
		<h2 class="form-signin-heading">WM-Install</h2>
		<input type="text" name="name" id="name" class="input-block-level validate[required]" placeholder="Nome & Cognome">
		<input type="text" name="usermail" id="usermail" class="input-block-level validate[required,custom[email]]" placeholder="Indirizzo E-mail">
		<input type="password" name="pwd" id="usermail" class="input-block-level validate[required] text-input" placeholder="Password">
		<button class="btn btn-large btn-primary" type="submit">Installa</button>
	</form>

</div>

{include file="footer.tpl"}