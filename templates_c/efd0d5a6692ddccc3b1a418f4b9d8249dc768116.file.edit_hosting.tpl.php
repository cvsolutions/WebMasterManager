<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 08:20:50
         compiled from "./templates/edit_hosting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144714655250bef5d277aee8-23565915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd0d5a6692ddccc3b1a418f4b9d8249dc768116' => 
    array (
      0 => './templates/edit_hosting.tpl',
      1 => 1354056000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144714655250bef5d277aee8-23565915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bef5d29b5bf9_71763853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bef5d29b5bf9_71763853')) {function content_50bef5d29b5bf9_71763853($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_options')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- container -->
<div class="container">

	<?php $_smarty_tpl->tpl_vars["navactive_3"] = new Smarty_variable("active", null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<!-- header -->
	<div class="page-header">
		<h1>Dominio <small>Hosting</small></h1>
		<p>Registrazione di un nuovo dominio</p>
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
			<label class="control-label" for="name">Nome sito Web</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" id="name" name="name">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="domain">Dominio</label>
			<div class="controls">
				<input type="text" class="validate[required,custom[url]] input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['domain'];?>
" id="domain" name="domain">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="expiry">Scadenza</label>
			<div class="controls">
				<input type="text" readonly class="validate[required] text-input datepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['expiry'],"%d-%m-%Y");?>
" id="expiry" name="expiry">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="provider">Provider</label>
			<div class="controls">
				<select class="validate[required] text-input" id="provider" name="provider">
					<option value="">-</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['config']->value['provider'],'selected'=>$_smarty_tpl->tpl_vars['row']->value['provider']),$_smarty_tpl);?>

				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="host_type">Hosting</label>
			<div class="controls">
				<select class="validate[required] text-input" id="host_type" name="host_type">
					<option value="">-</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['config']->value['hosting'],'selected'=>$_smarty_tpl->tpl_vars['row']->value['host_type']),$_smarty_tpl);?>

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
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['config']->value['type_ftp'],'selected'=>$_smarty_tpl->tpl_vars['row']->value['type_ftp']),$_smarty_tpl);?>

				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="host_ftp">Indirizzo / IP</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['host_ftp'];?>
" id="host_ftp" name="host_ftp">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="user_ftp">Username</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_ftp'];?>
" id="user_ftp" name="user_ftp">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pwd_ftp">Password</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pwd_ftp'];?>
" id="pwd_ftp" name="pwd_ftp">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="port_ftp">Porta</label>
			<div class="controls">
				<input type="text" class="validate[required] text-input" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['port_ftp'];?>
" id="port_ftp" name="port_ftp">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="transfer_ftp">Modalità di trasferimento</label>
			<div class="controls">
				<select class="validate[required] text-input" id="transfer_ftp" name="transfer_ftp">
					<option value="">-</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['config']->value['transfer'],'selected'=>$_smarty_tpl->tpl_vars['row']->value['transfer_ftp']),$_smarty_tpl);?>

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
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['config']->value['databases'],'selected'=>$_smarty_tpl->tpl_vars['row']->value['type_db']),$_smarty_tpl);?>

				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="host_db">Host / IP</label>
			<div class="controls">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['host_db'];?>
" class="input-xlarge" id="host_db" name="host_db">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="user_db">Username</label>
			<div class="controls">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_db'];?>
" class="input-xlarge" id="user_db" name="user_db">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pwd_db">Password</label>
			<div class="controls">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pwd_db'];?>
" class="input-xlarge" id="pwd_db" name="pwd_db">
			</div>
		</div>

		<div class="page-header">
			<h1><small>E-mail</small></h1>
		</div>

		<div class="control-group">
			<label class="control-label" for="host_email">Indirizzo E-mail</label>
			<div class="controls">
				<input type="text" class="validate[custom[email]] input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['host_email'];?>
" id="host_email" name="host_email">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pwd_email">Password</label>
			<div class="controls">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pwd_email'];?>
" class="input-xlarge" id="pwd_email" name="pwd_email">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="imap_email">Server IMAP</label>
			<div class="controls">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['imap_email'];?>
" class="input-xlarge" id="imap_email" name="imap_email">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="pop_email">Server POP3</label>
			<div class="controls">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pop_email'];?>
" class="input-xlarge" id="pop_email" name="pop_email">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="smtp_email">Server SMTP</label>
			<div class="controls">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['smtp_email'];?>
" class="input-xlarge" id="smtp_email" name="smtp_email">
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
			<label class="control-label" for="auth_info">Auth-Code</label>
			<div class="controls">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['auth_info'];?>
" class="input-xlarge" id="auth_info" name="auth_info">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="status">Stato</label>
			<div class="controls">
				<select class="validate[required] text-input" id="status" name="status">
					<option value="">-</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['config']->value['status'],'selected'=>$_smarty_tpl->tpl_vars['row']->value['status']),$_smarty_tpl);?>

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
	<?php echo $_smarty_tpl->getSubTemplate ("copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>