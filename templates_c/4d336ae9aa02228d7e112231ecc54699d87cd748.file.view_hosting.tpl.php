<?php /* Smarty version Smarty-3.1.12, created on 2012-11-29 13:58:13
         compiled from "./templates/view_hosting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52926535150b75be5861150-86843328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d336ae9aa02228d7e112231ecc54699d87cd748' => 
    array (
      0 => './templates/view_hosting.tpl',
      1 => 1354051540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52926535150b75be5861150-86843328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b75be59aff39_76814370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b75be59aff39_76814370')) {function content_50b75be59aff39_76814370($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- container -->
<div class="container">

	<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<div class="page-header">
		<h1>Domini & Hosting <small>Totale <?php echo count($_smarty_tpl->tpl_vars['result']->value);?>
</small></h1>
		<p>Visualizza l'elenco completo dei servizi</p>
	</div>

	<!-- table -->
	<?php if ($_smarty_tpl->tpl_vars['result']->value){?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Opzioni Globali</th>
				<th>Nome sito Web</th>
				<th>Provider</th>
				<th>Dominio</th>
				<th>Scadenza</th>
				<th>Stato</th>
			</tr>
		</thead>
		<tbody>

			<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td>
					<div class="btn-group">
						<a class="btn btn-primary" href="hosting.php?action=detail&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="icon-th icon-white"></i> Visualizza</a>
						<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="hosting.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="icon-pencil"></i> Modifica</a></li>
							<li><a href="export.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="_blank"><i class="icon-file"></i> Export in PDF</a></li>
							<li class="dropdown-submenu">
								<a tabindex="-1" href="javascript:void(0)"><i class="icon-th-list"></i> Collega Account</a>
								<ul class="dropdown-menu">
									<li><a href="account.php?action=new&host=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="icon-plus"></i> Crea un nuovo Account</a></li>
									<li><a href="account.php?action=view&host=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="icon-pencil"></i> Modifica & Cancella</a></li>
								</ul>
							</li>
							<li><a href="hosting.php?action=email&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="icon-envelope"></i> Sending Email</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['domain'];?>
" target="_blank"><i class="icon-globe"></i> <?php echo $_smarty_tpl->tpl_vars['row']->value['domain'];?>
</a></li>
							<li class="divider"></li>
							<li><a href="#deleteModal_<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" data-toggle="modal"><i class="icon-trash"></i> Elimina Hosting & Account</a></li>
						</ul>
					</div>
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
							<a href="hosting.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-primary">SI</a>
						</div>
					</div>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['provider'];?>
</td>
				<td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['row']->value['domain'],'http://','');?>
</td>
				<td><span class="label <?php echo $_smarty_tpl->tpl_vars['row']->value['class_expiry'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['expiry'],"%d-%m-%Y");?>
</span></td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
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