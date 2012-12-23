{include file="header.tpl"}

<div class="container">

	<p>Gentile <b>{$row.name}</b>, la password generata dal sistema è:</p>
	<ul>
		<li>Indirizzo E-mail: {$row.usermail}</li>
		<li>Password: {$row.pwd}</li>
	</ul>
	<hr>
	<p>{$row.signature|nl2br}</p>

</div>

{include file="footer.tpl"}