{include file="header.tpl"}

<!-- container -->
<div class="container">

	{assign var="navactive_1" value="active"}
	{include file="navbar.tpl"}

	<!-- header -->
	<div class="page-header">
		<h1>Benvenuto <small>{$smarty.session.WM_Auth.WM_User}</small></h1>
		<p>Il tuo ultimo accesso è stato {$smarty.session.WM_Auth.WM_Start}</p>
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
					['Hosting', {$cnt_host}],
					['Account', {$cnt_account}],
					['Attivo', {$cnt_host_active}],
					['Sospeso', {$cnt_host_suspended}],
					['Scadenza', {$cnt_host_expiry}]
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
					{foreach item="row" from=$registered}
					<tr>
						<td>{$row.domain|replace:'http://':''}</td>
						<td><span class="label {$row.class_status}">{$row.status}</span></td>
					</tr>
					{/foreach}
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
					{foreach item="row" from=$expiry}
					<tr>
						<td>{$row.domain|replace:'http://':''}</td>
						<td><span class="label {$row.class_expiry}">{$row.expiry|date_format:"%d-%m-%Y"}</span></td>
					</tr>
					{/foreach}
				</tbody>
			</table>
		</div>
	</div>

	<!-- copyright -->
	{include file="copyright.tpl"}

</div>

{include file="footer.tpl"}