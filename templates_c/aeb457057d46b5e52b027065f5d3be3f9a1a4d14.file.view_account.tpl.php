<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 08:22:32
         compiled from "./templates/view_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40877077350bef5f5e31ee1-04594779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeb457057d46b5e52b027065f5d3be3f9a1a4d14' => 
    array (
      0 => './templates/view_account.tpl',
      1 => 1354692132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40877077350bef5f5e31ee1-04594779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bef5f6015da6_77919287',
  'variables' => 
  array (
    'host' => 0,
    'result' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bef5f6015da6_77919287')) {function content_50bef5f6015da6_77919287($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- container -->
<div class="container">

	<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<!-- header -->
	<div class="page-header">
		<h1>Account <small><?php echo $_smarty_tpl->tpl_vars['host']->value['name'];?>
</small></h1>
		<p>Visualizza l'elenco completo dei servizi</p>
	</div>

	<!-- sub menu -->
	<ul class="pager">
		<li><a href="hosting.php?action=view">Domini & Hosting</a></li>
		<li><a href="hosting.php?action=detail&id=<?php echo $_GET['host'];?>
">Visualizza <?php echo $_smarty_tpl->tpl_vars['host']->value['name'];?>
</a></li>
		<li><a href="account.php?action=new&host=<?php echo $_GET['host'];?>
">Crea un nuovo Account</a></li>
	</ul>

	<!-- table -->
	<?php if ($_smarty_tpl->tpl_vars['result']->value){?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Opzioni Globali</th>
				<th>Opzioni Globali</th>
				<th>Nome Account</th>
				<th>Tipologia</th>
			</tr>
		</thead>
		<tbody>

			<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td><a class="btn btn-primary" href="account.php?action=edit&host=<?php echo $_GET['host'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Modifica</a></td>
				<td>
					<a class="btn btn-danger" data-toggle="modal" href="#deleteModal_<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Elimina</a>
					<div id="deleteModal_<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="deleteLabel">Elimina</h3>
						</div>
						<div class="modal-body">
							<p>Sei sicuro di voler eliminare "<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" ?</p>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Chiudi</button>
							<a href="account.php?action=delete&host=<?php echo $_GET['host'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-primary">SI</a>
						</div>
					</div>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['account_type'];?>
</td>
			</tr>
			<?php } ?>

		</tbody>
	</table>
	<?php }else{ ?>
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Nessun risultato trovato!</strong>
	</div>
	<?php }?>

	<!-- copyright -->
	<?php echo $_smarty_tpl->getSubTemplate ("copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>