<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 08:21:16
         compiled from "./templates/email_hosting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34966298050bef5ec909414-71242978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '031fd72a47cc3e9ef6b1c03086f9c62b63ed9437' => 
    array (
      0 => './templates/email_hosting.tpl',
      1 => 1354051976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34966298050bef5ec909414-71242978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'result' => 0,
    'account' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bef5ecab4904_98820217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bef5ecab4904_98820217')) {function content_50bef5ecab4904_98820217($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/function.html_checkboxes.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- container -->
<div class="container">

	<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<!-- header -->
	<div class="page-header">
		<h1>Sending Email <small><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</small></h1>
		<p>Spedisci i dati del dominio al cliente</p>
	</div>

	<!-- sub menu -->
	<ul class="pager">
		<li><a href="hosting.php?action=view">Domini & Hosting</a></li>
		<li><a href="hosting.php?action=detail&id=<?php echo $_GET['id'];?>
">Visualizza <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></li>
		<li><a href="account.php?action=view&host=<?php echo $_GET['id'];?>
">Visualizza Account</a></li>
		<li><a href="export.php?host=<?php echo $_GET['id'];?>
">Export in PDF</a></li>
	</ul>

	<?php if ($_POST){?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Operazione eseguita con successo!</strong>
	</div>
	<?php }?>

	<form action="" class="form-horizontal" id="validation" method="post" accept-charset="utf-8">

		<!-- table -->
		<table class="table table-bordered">

			<thead>
				<tr>
					<th>Account</th>
					<th>Spedire</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>FTP</td>
					<td><?php echo smarty_function_html_checkboxes(array('name'=>'sending_ftp','selected'=>$_smarty_tpl->tpl_vars['row']->value['sending_ftp'],'values'=>'1'),$_smarty_tpl);?>
</td>
				</tr>

				<?php if ($_smarty_tpl->tpl_vars['row']->value['type_db']>0){?>
				<tr>
					<td>Database MySQL</td>
					<td><?php echo smarty_function_html_checkboxes(array('name'=>'sending_db','selected'=>$_smarty_tpl->tpl_vars['row']->value['sending_db'],'values'=>'1'),$_smarty_tpl);?>
</td>
				</tr>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['row']->value['host_email']){?>
				<tr>
					<td>E-mail</td>
					<td><?php echo smarty_function_html_checkboxes(array('name'=>'sending_email','selected'=>$_smarty_tpl->tpl_vars['row']->value['sending_email'],'values'=>'1'),$_smarty_tpl);?>
</td>
				</tr>
				<?php }?>

				<?php  $_smarty_tpl->tpl_vars["account"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["account"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["account"]->key => $_smarty_tpl->tpl_vars["account"]->value){
$_smarty_tpl->tpl_vars["account"]->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['account']->value['account_type'];?>
</td>
					<td><?php echo smarty_function_html_checkboxes(array('name'=>"sending[".((string)$_smarty_tpl->tpl_vars['account']->value['id'])."]",'selected'=>$_smarty_tpl->tpl_vars['account']->value['sending'],'values'=>'1'),$_smarty_tpl);?>
</td>
				</tr>
				<?php } ?>

				<tr class="error">
					<td><b>Inviare email regolarmente</b></td>
					<td><input type="text" class="validate[custom[email]] text-input input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['host_email'];?>
" id="host_email" name="host_email"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" class="btn btn-primary">Invia Email</button></td>
				</tr>

			</tbody>
		</table>

	</form>

	<!-- copyright -->
	<?php echo $_smarty_tpl->getSubTemplate ("copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>