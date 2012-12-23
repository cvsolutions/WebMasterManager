{include file="header.tpl"}

<!-- container -->
<div class="container">

	<!-- form -->
	<form action="" class="form-signin" id="validation" method="post" accept-charset="utf-8">
		<h2 class="form-signin-heading">WM-Administrator</h2>
		<input type="text" name="usermail" id="usermail" class="input-block-level validate[required,custom[email]]" placeholder="Indirizzo E-mail">
		<input type="password" name="pwd" id="usermail" class="input-block-level validate[required] text-input" placeholder="Password">
		<label class="">
			<a href="#passwordModal" data-toggle="modal">Password smarrita?</a>
		</label>
		<button class="btn btn-large btn-primary" type="submit">Login</button>
	</form>

	<div id="passwordModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="passwordLabel" aria-hidden="true">
		<form action="lostpass.php" id="validation" method="post" accept-charset="utf-8">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="passwordLabel">Password smarrita</h3>
			</div>
			<div class="modal-body">
				<p>Inserisci l'email con la quale hai effettuato la registrazione.</p>
				<div class="control-group">
					<label class="control-label" for="usermail">Indirizzo E-mail</label>
					<div class="controls">
						<input type="email" class="validate[required,custom[email]] input-xlarge" value="" id="usermail" name="usermail">
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Chiudi</button>
				<button type="submit" class="btn btn-primary">Recupera password</button>
			</div>
		</form>
	</div>

</div>

{include file="footer.tpl"}