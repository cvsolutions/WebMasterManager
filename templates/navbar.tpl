<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">{$config.name}</a>
      <div class="nav-collapse collapse navbar-responsive-collapse">
        <ul class="nav">
          <li class="{$navactive_1}"><a href="dashboard.php"><i class="icon-home"></i> {$language.1}</a></li>
          <li class="{$navactive_2}"><a href="settings.php">Configurazione</a></li>
          <li class="dropdown {$navactive_3}">
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
          <input type="text" name="search" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' class="search-query span2" placeholder="Search">
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
</div>