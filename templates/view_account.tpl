{include file="header.tpl"}

<!-- container -->
<div class="container">

	{include file="navbar.tpl"}

	<!-- header -->
	<div class="page-header">
		<h1>Account <small>{$host.name}</small></h1>
		<p>Visualizza l'elenco completo dei servizi</p>
	</div>

	<!-- sub menu -->
	<ul class="pager">
		<li><a href="hosting.php?action=view">Domini & Hosting</a></li>
		<li><a href="hosting.php?action=detail&id={$smarty.get.host}">Visualizza {$host.name}</a></li>
		<li><a href="account.php?action=new&host={$smarty.get.host}">Crea un nuovo Account</a></li>
	</ul>

	<!-- table -->
	{if $result}
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

			{foreach item="row" from=$result}
			<tr>
				<td><a class="btn btn-primary" href="account.php?action=edit&host={$smarty.get.host}&id={$row.id}">Modifica</a></td>
				<td>
					<a class="btn btn-danger" data-toggle="modal" href="#deleteModal_{$row.id}">Elimina</a>
					<div id="deleteModal_{$row.id}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="deleteLabel">Elimina</h3>
						</div>
						<div class="modal-body">
							<p>Sei sicuro di voler eliminare "{$row.name}" ?</p>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Chiudi</button>
							<a href="account.php?action=delete&host={$smarty.get.host}&id={$row.id}" class="btn btn-primary">SI</a>
						</div>
					</div>
				</td>
				<td>{$row.name}</td>
				<td>{$row.account_type}</td>
			</tr>
			{/foreach}

		</tbody>
	</table>
	{else}
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Nessun risultato trovato!</strong>
	</div>
	{/if}

	<!-- copyright -->
	{include file="copyright.tpl"}

</div>

{include file="footer.tpl"}