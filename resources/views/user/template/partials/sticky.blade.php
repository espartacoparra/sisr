<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ action('ProjectController@index') }}">Discontri</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tool" data-placement="right" title="Inicio">
          <a class="nav-link" href="{{ action('ProjectController@index') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text" id="colorbar">Inicio</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registrar Proyectos">
          <a class="nav-link" href="{{ action('ProjectController@create') }}">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text" id="colorbar">Registrar Proyectos de Largo Plazo</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Proyectos">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text" id="colorbar">Proyectos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="{{ action('ProjectController@propuestos') }}"><span id="colorbar"> Propuestos</a></span>
            </li>
            <li>
              <a href="{{ action('ProjectController@aprobados') }}"><span id="colorbar"> Aprobados</a></span>
            </li>
            <li>
              <a href="{{ action('ProjectController@finalizados') }}"><span id="colorbar"> Culminados</a></span>
            </li>
            <li>
              <a href="{{ action('ProjectController@cobrados') }}"><span id="colorbar"> Cobrados</a></span>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text" id="colorbar">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">
        