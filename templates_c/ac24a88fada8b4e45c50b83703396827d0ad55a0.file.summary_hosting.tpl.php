<?php /* Smarty version Smarty-3.1.12, created on 2012-12-22 14:46:12
         compiled from "./templates/summary_hosting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67035361250d5b9a4af8652-15210821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac24a88fada8b4e45c50b83703396827d0ad55a0' => 
    array (
      0 => './templates/summary_hosting.tpl',
      1 => 1356183965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67035361250d5b9a4af8652-15210821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hosting' => 0,
    'config' => 0,
    'account' => 0,
    'row' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d5b9a4c7c434_85361388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d5b9a4c7c434_85361388')) {function content_50d5b9a4c7c434_85361388($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container">

	<p>Gentile cliente, quì di seguito i dati per amministrare ed accedere ai servizi di <?php echo $_smarty_tpl->tpl_vars['hosting']->value['domain'];?>
</p>
	<p>*** ATTENZIONE LEGGERE E CONSERVARE ***</p>

	<?php if ($_smarty_tpl->tpl_vars['hosting']->value['sending_ftp']==1){?>
	<p><b>FTP</b></p>
	<ul>
		<li>Tipologia: <?php echo $_smarty_tpl->tpl_vars['config']->value['type_ftp'][$_smarty_tpl->tpl_vars['hosting']->value['type_ftp']];?>
</li>
		<li>Indirizzo / IP: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['host_ftp'];?>
</li>
		<li>Username: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['user_ftp'];?>
</li>
		<li>Password: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['pwd_ftp'];?>
</li>
		<li>Porta: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['port_ftp'];?>
</li>
		<li>Modalità di trasferimento: <?php echo $_smarty_tpl->tpl_vars['config']->value['transfer'][$_smarty_tpl->tpl_vars['hosting']->value['transfer_ftp']];?>
</li>
	</ul>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['hosting']->value['sending_db']==1){?>
	<p><b>Database</b></p>
	<ul>
		<li>Tipologia: <?php echo $_smarty_tpl->tpl_vars['config']->value['databases'][$_smarty_tpl->tpl_vars['hosting']->value['type_db']];?>
</li>
		<li>Host / IP: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['host_db'];?>
</li>
		<li>Username: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['user_db'];?>
</li>
		<li>Password: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['pwd_db'];?>
</li>
	</ul>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['hosting']->value['sending_email']==1){?>
	<p><b>E-mail</b></p>
	<ul>
		<li>Indirizzo E-mail: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['host_email'];?>
</li>
		<li>Password: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['pwd_email'];?>
</li>
		<li>Server IMAP: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['imap_email'];?>
</li>
		<li>Server POP3: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['pop_email'];?>
</li>
		<li>Server SMTP: <?php echo $_smarty_tpl->tpl_vars['hosting']->value['smtp_email'];?>
</li>
	</ul>
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['account']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['sending']==1){?>
	<p><b>Account <?php echo $_smarty_tpl->tpl_vars['row']->value['account_type'];?>
</b></p>
	<ul>
		<li>Username: <?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</li>
		<li>Password: <?php echo $_smarty_tpl->tpl_vars['row']->value['password'];?>
</li>
	</ul>
	<?php }?>
	<?php } ?>

	<hr>
	<p><?php echo nl2br($_smarty_tpl->tpl_vars['user']->value['signature']);?>
</p>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>