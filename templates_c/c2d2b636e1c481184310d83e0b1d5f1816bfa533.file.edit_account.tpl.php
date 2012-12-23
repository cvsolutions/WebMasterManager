<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 08:29:25
         compiled from "./templates/edit_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49115233650bef7d59cca00-94536203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d2b636e1c481184310d83e0b1d5f1816bfa533' => 
    array (
      0 => './templates/edit_account.tpl',
      1 => 1354051054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49115233650bef7d59cca00-94536203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'row' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bef7d5a9bef7_60773678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bef7d5a9bef7_60773678')) {function content_50bef7d5a9bef7_60773678($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- container -->
<div class="container">

	<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<!-- header -->
	<div class="page-header">
		<h1>Account <small><?php echo $_smarty_tpl->tpl_vars['host']->value['name'];?>
</small></h1>
		<p>Registrazione di un nuovo account per il dominio</p>
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
			<label class="control-label" for="name">Nome Account</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" id="name" name="name">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="account_type">Tipologia</label>
			<div class="controls">
				<select class="validate[required] text-input" id="account_type" name="account_type">
					<option value="">-</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['config']->value['account'],'selected'=>$_smarty_tpl->tpl_vars['row']->value['account_type']),$_smarty_tpl);?>

				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="username">Username</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
" id="username" name="username">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="password">Password</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['password'];?>
" id="password" name="password">
			</div>
		</div>

		<div class="page-header">
			<h1><small>Altro</small></h1>
		</div>

		<div class="control-group">
			<label class="control-label" for="information">Note Aggiuntive</label>
			<div class="controls">
				<textarea class="field span7" rows="13" name="information" id="information"><?php echo $_smarty_tpl->tpl_vars['row']->value['information'];?>
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