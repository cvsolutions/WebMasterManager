<?php /* Smarty version Smarty-3.1.12, created on 2012-12-23 12:06:23
         compiled from "./templates/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95399468250b75be368e057-72281029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406d98a749f9877a1177c81f51e901665be8cb55' => 
    array (
      0 => './templates/dashboard.tpl',
      1 => 1356260780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95399468250b75be368e057-72281029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b75be37b5475_59064716',
  'variables' => 
  array (
    'cnt_host' => 0,
    'cnt_account' => 0,
    'cnt_host_active' => 0,
    'cnt_host_suspended' => 0,
    'cnt_host_expiry' => 0,
    'registered' => 0,
    'row' => 0,
    'expiry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b75be37b5475_59064716')) {function content_50b75be37b5475_59064716($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/concettovecchio/GitProject/WebMasterManager/library/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- container -->
<div class="container">

	<?php $_smarty_tpl->tpl_vars["navactive_1"] = new Smarty_variable("active", null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<!-- header -->
	<div class="page-header">
		<h1>Benvenuto <small><?php echo $_SESSION['WM_Auth']['WM_User'];?>
</small></h1>
		<p>Il tuo ultimo accesso è stato <?php echo $_SESSION['WM_Auth']['WM_Start'];?>
</p>
	</div>

	<!-- row -->
	<div class="row">
		<div class="span4">

			<script type="text/javascript">

			// Load the Visualization API and the piechart package.
			google.load('visualization', '1.0', {
				'packages':['corechart']
			});

			// Set a callback to run when the Google Visualization API is loaded.
			google.setOnLoadCallback(drawChart);

			// Callback that creates and populates a data table,
			// instantiates the pie chart, passes in the data and
			// draws it.
			function drawChart() {

				// Create the data table.
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Topping');
				data.addColumn('number', 'Slices');
				data.addRows([
					['Hosting', <?php echo $_smarty_tpl->tpl_vars['cnt_host']->value;?>
],
					['Account', <?php echo $_smarty_tpl->tpl_vars['cnt_account']->value;?>
],
					['Attivo', <?php echo $_smarty_tpl->tpl_vars['cnt_host_active']->value;?>
],
					['Sospeso', <?php echo $_smarty_tpl->tpl_vars['cnt_host_suspended']->value;?>
],
					['Scadenza', <?php echo $_smarty_tpl->tpl_vars['cnt_host_expiry']->value;?>
]
					]);

				// Set chart options
				var options = {
					'title':'in un colpo d\'occhio',
					'backgroundColor': '#F5F5F5',
					'width':400,
					'height':300
				};

				// Instantiate and draw our chart, passing in some options.
				var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
				chart.draw(data, options);
			}
			</script>

			<div id="chart_div"></div>

		</div>
		<div class="span4">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Dominio</th>
						<th>Stato</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['registered']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['row']->value['domain'],'http://','');?>
</td>
						<td><span class="label <?php echo $_smarty_tpl->tpl_vars['row']->value['class_status'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
</span></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="span4">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Dominio</th>
						<th>Scadenza</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['expiry']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['row']->value['domain'],'http://','');?>
</td>
						<td><span class="label <?php echo $_smarty_tpl->tpl_vars['row']->value['class_expiry'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['expiry'],"%d-%m-%Y");?>
</span></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- copyright -->
	<?php echo $_smarty_tpl->getSubTemplate ("copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>