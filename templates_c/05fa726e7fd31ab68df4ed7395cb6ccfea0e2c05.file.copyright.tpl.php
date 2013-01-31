<?php /* Smarty version Smarty-3.1.12, created on 2013-01-31 23:15:52
         compiled from "./templates/copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1808138072510a9791c3ce25-15564595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05fa726e7fd31ab68df4ed7395cb6ccfea0e2c05' => 
    array (
      0 => './templates/copyright.tpl',
      1 => 1359670546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1808138072510a9791c3ce25-15564595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510a9791c66ad2_27139618',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510a9791c66ad2_27139618')) {function content_510a9791c66ad2_27139618($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/modifier.date_format.php';
?><hr>
<p>Copyright © <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['version'];?>
 :: <a href="http://www.cvsolutions.it">CvSolutions</a></p><?php }} ?>