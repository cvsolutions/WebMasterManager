<?php /* Smarty version Smarty-3.1.12, created on 2013-01-31 22:30:33
         compiled from "./templates/install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1519141355510ae279962ba8-07901933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '037bb97e13b9689afa8b692f37520badb043da82' => 
    array (
      0 => './templates/install.tpl',
      1 => 1356259736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519141355510ae279962ba8-07901933',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510ae279a110c1_32942791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510ae279a110c1_32942791')) {function content_510ae279a110c1_32942791($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- container -->
<div class="container">

	<?php if ($_POST){?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Operazione eseguita con successo!</strong>
	</div>
	<?php }?>

	<!-- form -->
	<form action="" class="form-signin" id="validation" method="post" accept-charset="utf-8">
		<h2 class="form-signin-heading">WM-Install</h2>
		<input type="text" name="name" id="name" class="input-block-level validate[required]" placeholder="Nome & Cognome">
		<input type="text" name="usermail" id="usermail" class="input-block-level validate[required,custom[email]]" placeholder="Indirizzo E-mail">
		<input type="password" name="pwd" id="usermail" class="input-block-level validate[required] text-input" placeholder="Password">
		<button class="btn btn-large btn-primary" type="submit">Installa</button>
	</form>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>