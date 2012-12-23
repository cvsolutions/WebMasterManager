<?php /* Smarty version Smarty-3.1.12, created on 2012-11-29 13:58:11
         compiled from "./templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70645914650b75be37ec460-59824065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf88da39002887dcd3ce29c16569ab30c732e2f' => 
    array (
      0 => './templates/navbar.tpl',
      1 => 1352832084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70645914650b75be37ec460-59824065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'navactive_1' => 0,
    'navactive_2' => 0,
    'navactive_3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b75be380c0b3_33131893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b75be380c0b3_33131893')) {function content_50b75be380c0b3_33131893($_smarty_tpl) {?><div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#"><?php echo $_smarty_tpl->tpl_vars['config']->value['name'];?>
</a>
      <div class="nav-collapse collapse navbar-responsive-collapse">
        <ul class="nav">
          <li class="<?php echo $_smarty_tpl->tpl_vars['navactive_1']->value;?>
"><a href="dashboard.php"><i class="icon-home"></i> Dashboard</a></li>
          <li class="<?php echo $_smarty_tpl->tpl_vars['navactive_2']->value;?>
"><a href="settings.php">Configurazione</a></li>
          <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['navactive_3']->value;?>
">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Domini & Hosting <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="hosting.php?action=new"><i class="icon-plus"></i> Aggiungi Nuovo</a></li>
              <li><a href="hosting.php?action=view"><i class="icon-pencil"></i> Modifica & Cancella</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="icon-search"></i> Ricerca Avanzata</a></li>
            </ul>
          </li>
        </ul>
        <form action="" class="navbar-search pull-right" method="get" accept-charset="utf-8">
          <input type="text" name="search" class="search-query span2" placeholder="Search">
        </form>
        <ul class="nav pull-left">
          <li><a href="#logoutModal" data-toggle="modal">Logout</a></li>
        </ul>
      </div><!-- /.nav-collapse -->
    </div>
  </div><!-- /navbar-inner -->
</div>


<div id="logoutModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="logoutLabel">Logout</h3>
  </div>
  <div class="modal-body">
    <p>Sei sicuro di voler uscire?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Chiudi</button>
    <a href="dashboard.php?action=logout" class="btn btn-primary">SI</a>
  </div>
</div><?php }} ?>