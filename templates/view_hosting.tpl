{include file="header.tpl"}

<!-- container -->
<div class="container">

	{include file="navbar.tpl"}

	<div class="page-header">
		<h1>Domini & Hosting <small>Totale {$result|count}</small></h1>
		<p>Visualizza l'elenco completo dei servizi</p>
	</div>

	<!-- table -->
	{if $result}
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

			{foreach item="row" from=$result}
			<tr>
				<td>
					<div class="btn-group">
						<a class="btn btn-primary" href="hosting.php?action=detail&id={$row.id}"><i class="icon-th icon-white"></i> Visualizza</a>
						<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="hosting.php?action=edit&id={$row.id}"><i class="icon-pencil"></i> Modifica</a></li>
							<li><a href="export.php?id={$row.id}" target="_blank"><i class="icon-file"></i> Export in PDF</a></li>
							<li class="dropdown-submenu">
								<a tabindex="-1" href="javascript:void(0)"><i class="icon-th-list"></i> Collega Account</a>
								<ul class="dropdown-menu">
									<li><a href="account.php?action=new&host={$row.id}"><i class="icon-plus"></i> Crea un nuovo Account</a></li>
									<li><a href="account.php?action=view&host={$row.id}"><i class="icon-pencil"></i> Modifica & Cancella</a></li>
								</ul>
							</li>
							<li><a href="hosting.php?action=email&id={$row.id}"><i class="icon-envelope"></i> Sending Email</a></li>
							<li><a href="{$row.domain}" target="_blank"><i class="icon-globe"></i> {$row.domain}</a></li>
							<li class="divider"></li>
							<li><a href="#deleteModal_{$row.id}" data-toggle="modal"><i class="icon-trash"></i> Elimina Hosting & Account</a></li>
						</ul>
					</div>
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
							<a href="hosting.php?action=delete&id={$row.id}" class="btn btn-primary">SI</a>
						</div>
					</div>
				</td>
				<td>{$row.name}</td>
				<td>{$row.provider}</td>
				<td>{$row.domain|replace:'http://':''}</td>
				<td><span class="label {$row.class_expiry}">{$row.expiry|date_format:"%d-%m-%Y"}</span></td>
				<td>{$row.status}</td>
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