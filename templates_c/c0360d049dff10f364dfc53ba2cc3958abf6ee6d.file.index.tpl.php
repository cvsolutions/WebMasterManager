<?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 11:48:03
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54994361850bef5be527a52-59861717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1356259001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54994361850bef5be527a52-59861717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bef5be614486_83633495',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bef5be614486_83633495')) {function content_50bef5be614486_83633495($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>