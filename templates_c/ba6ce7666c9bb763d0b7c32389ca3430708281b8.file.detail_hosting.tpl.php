<?php /* Smarty version Smarty-3.1.12, created on 2012-12-22 14:45:29
         compiled from "./templates/detail_hosting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212798321750b75be84ee7d3-75069466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba6ce7666c9bb763d0b7c32389ca3430708281b8' => 
    array (
      0 => './templates/detail_hosting.tpl',
      1 => 1356183926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212798321750b75be84ee7d3-75069466',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b75be86ed596_58752776',
  'variables' => 
  array (
    'row' => 0,
    'config' => 0,
    'result' => 0,
    'account' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b75be86ed596_58752776')) {function content_50b75be86ed596_58752776($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- container -->
<div class="container">

	<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<!-- header -->
	<div class="page-header">
		<h1>Visualizza <small><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</small></h1>
		<p>Mostra le informazioni di registrazione del dominio e degli account collegati</p>
	</div>

	<!-- sub menu -->
	<ul class="pager">
		<li><a href="hosting.php?action=view">Domini & Hosting</a></li>
		<li><a href="hosting.php?action=edit&id=<?php echo $_GET['id'];?>
">Modifica <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></li>
		<li><a href="hosting.php?action=email&id=<?php echo $_GET['id'];?>
">Sending Email</a></li>
		<li><a href="export.php?id=<?php echo $_GET['id'];?>
">Export in PDF</a></li>
	</ul>

	<!-- table -->
	<table class="table table-bordered">

		<tbody>
			<tr class="info">
				<td colspan="2"><b>Hosting</b></td>
			</tr>
			<tr>
				<td>Nome sito Web</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
			</tr>
			<tr>
				<td>Dominio</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['domain'];?>
</td>
			</tr>
			<tr>
				<td>Scadenza</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['expiry'],"%d-%m-%Y");?>
</td>
			</tr>
			<tr>
				<td>Provider</td>
				<td><?php echo $_smarty_tpl->tpl_vars['config']->value['provider'][$_smarty_tpl->tpl_vars['row']->value['provider']];?>
</td>
			</tr>
			<tr>
				<td>Hosting</td>
				<td><?php echo $_smarty_tpl->tpl_vars['config']->value['hosting'][$_smarty_tpl->tpl_vars['row']->value['host_type']];?>
</td>
			</tr>
			<tr>
				<td>Stato</td>
				<td><?php echo $_smarty_tpl->tpl_vars['config']->value['status'][$_smarty_tpl->tpl_vars['row']->value['status']];?>
</td>
			</tr>

			<?php if ($_smarty_tpl->tpl_vars['row']->value['auth_info']){?>
			<tr>
				<td>Auth-Code</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['auth_info'];?>
</td>
			</tr>
			<?php }?>

			<tr class="info">
				<td colspan="2"><b>FTP</b></td>
			</tr>
			<tr>
				<td>Tipologia</td>
				<td><?php echo $_smarty_tpl->tpl_vars['config']->value['type_ftp'][$_smarty_tpl->tpl_vars['row']->value['type_ftp']];?>
</td>
			</tr>
			<tr>
				<td>Indirizzo / IP</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['host_ftp'];?>
</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_ftp'];?>
</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['pwd_ftp'];?>
</td>
			</tr>
			<tr>
				<td>Porta</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['port_ftp'];?>
</td>
			</tr>
			<tr>
				<td>Modalità di trasferimento</td>
				<td><?php echo $_smarty_tpl->tpl_vars['config']->value['transfer'][$_smarty_tpl->tpl_vars['row']->value['transfer_ftp']];?>
</td>
			</tr>

			<?php if ($_smarty_tpl->tpl_vars['row']->value['type_db']>0){?>
			<tr class="info">
				<td colspan="2"><b>Database</b></td>
			</tr>
			<tr>
				<td>Tipologia</td>
				<td><?php echo $_smarty_tpl->tpl_vars['config']->value['databases'][$_smarty_tpl->tpl_vars['row']->value['type_db']];?>
</td>
			</tr>
			<tr>
				<td>Host / IP</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['host_db'];?>
</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_db'];?>
</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['pwd_db'];?>
</td>
			</tr>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['row']->value['host_email']){?>
			<tr class="info">
				<td colspan="2"><b>E-mail</b></td>
			</tr>
			<tr>
				<td>Indirizzo E-mail</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['host_email'];?>
</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['pwd_email'];?>
</td>
			</tr>
			<tr>
				<td>Server IMAP</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['imap_email'];?>
</td>
			</tr>
			<tr>
				<td>Server POP3</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['pop_email'];?>
</td>
			</tr>
			<tr>
				<td>Server SMTP</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['smtp_email'];?>
</td>
			</tr>
			<?php }?>

			<!-- loop account -->
			<?php  $_smarty_tpl->tpl_vars["account"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["account"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["account"]->key => $_smarty_tpl->tpl_vars["account"]->value){
$_smarty_tpl->tpl_vars["account"]->_loop = true;
?>
			<tr class="info">
				<td colspan="2"><b>Account <?php echo $_smarty_tpl->tpl_vars['account']->value['account_type'];?>
</b></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><?php echo $_smarty_tpl->tpl_vars['account']->value['username'];?>
</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo $_smarty_tpl->tpl_vars['account']->value['password'];?>
</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['account']->value['information']){?>
			<tr>
				<td>Note</td>
				<td><?php echo nl2br($_smarty_tpl->tpl_vars['account']->value['information']);?>
</td>
			</tr>
			<?php }?>
			<?php } ?>
			<!-- loop account -->

			<?php if ($_smarty_tpl->tpl_vars['row']->value['information']){?>
			<tr class="info">
				<td colspan="2"><b>Note Aggiuntive</b></td>
			</tr>
			<tr>
				<td colspan="2"><?php echo nl2br($_smarty_tpl->tpl_vars['row']->value['information']);?>
</td>
			</tr>
			<?php }?>

		</tbody>

	</table>

	<!-- copyright -->
	<?php echo $_smarty_tpl->getSubTemplate ("copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>