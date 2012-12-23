<?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 11:48:18
         compiled from "./templates/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171109946050bef5e4bf3931-51290012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05f0b42a6d6267bc296e925cc75c4cfa492835f5' => 
    array (
      0 => './templates/settings.tpl',
      1 => 1356183635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171109946050bef5e4bf3931-51290012',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bef5e4cc3354_11745703',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bef5e4cc3354_11745703')) {function content_50bef5e4cc3354_11745703($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- container -->
<div class="container">

	<?php $_smarty_tpl->tpl_vars["navactive_2"] = new Smarty_variable("active", null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<!-- header -->
	<div class="page-header">
		<h1>WM <small>Configurazione</small></h1>
		<p>Modifica le impostazioni dell'account e i parametri di funzionamento</p>
	</div>

	<?php if ($_POST){?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Operazione eseguita con successo!</strong>
	</div>
	<?php }?>

	<!-- form -->
	<form action="" class="form-horizontal" id="validation" method="post" accept-charset="utf-8">

		<div class="control-group">
			<label class="control-label" for="name">Nome & Cognome</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" id="name" name="name">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="usermail">Indirizzo E-mail</label>
			<div class="controls">
				<input type="email" class="validate[required,custom[email]]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['usermail'];?>
" id="usermail" name="usermail">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pwd">Password</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pwd'];?>
" id="pwd" name="pwd">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="signature">Firma E-mail</label>
			<div class="controls">
				<textarea class="field span7" rows="13" name="signature" id="signature"><?php echo $_smarty_tpl->tpl_vars['row']->value['signature'];?>
</textarea>
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary">Salva</button>
			</div>
		</div>

	</form>

	<!-- copyright -->
	<?php echo $_smarty_tpl->getSubTemplate ("copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>