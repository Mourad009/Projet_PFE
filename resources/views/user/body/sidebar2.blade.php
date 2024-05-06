<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          M<span>D</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{route('dashboardpage2')}}" class="nav-link">
              <i class="link-icon" data-feather="home"></i>
              <span class="link-title">Acceil</span>
            </a>
          </li>
          
          <li class="nav-item nav-category">Postes</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#em" role="button" aria-expanded="false" aria-controls="em">
              <i class="link-icon" data-feather="send"></i>
              <span class="link-title">Postes Commentaires</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="em">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('allposts2') }}" class="nav-link">Tout les Postes</a>
                </li>
                
              </ul>
            </div>
          </li>

          





          
          <li class="nav-item nav-category">Codes des Components</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">UI </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                
                <li class="nav-item">
                  <a href="{{ route('alerts2') }}" class="nav-link">Alertes</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('badges2') }}" class="nav-link">Badges</a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ route('buttons2') }}" class="nav-link">Bouttons</a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ route('cards2') }}" class="nav-link">Cartes</a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ route('listgroup2') }}" class="nav-link">Liste de groupe</a>
                </li>
                
                
                <li class="nav-item">
                  <a href="{{ route('navbar2') }}" class="nav-link">Barre de navigation</a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ route('progress2') }}" class="nav-link">Progres</a>
                </li>
        
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">UI Avancé</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="advancedUI">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('sortable2') }}" class="nav-link">Sortes des tableau</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('sweetalert2') }}" class="nav-link">douce Alerte</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Formilare</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('basic2') }}" class="nav-link">Elements Essentiel</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('advanced2') }}" class="nav-link">Elements Avancé</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('editor2') }}" class="nav-link">Editeurs</a>
                </li>
          
              </ul>
            </div>
          </li> 
          <li class="nav-item">
            <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Graphique</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('apex2') }}" class="nav-link">Sommet</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('chartjs2') }}" class="nav-link">Graphique Js</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('flot2') }}" class="nav-link">Flottant</a>
                </li>
                
              </ul>
            </div>
          </li> 
           <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Tableaux</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('basictable2')}}" class="nav-link">Tableau Essentiel</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('datatable2')}}" class="nav-link">Tableau des donneés</a>
                </li>
              </ul>
            </div>
          </li> 
           <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Icones</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('feather2')}}" class="nav-link">Icones Plumé</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('flag2')}}" class="nav-link">Icones des payes</a>
                </li>
                
              </ul>
            </div>
          </li> 
           <li class="nav-item nav-category">Nos-Contacte</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Equipe</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('aboutus2')}}" class="nav-link">A propos de nous</a>
                </li>
                
              </ul>
            </div>
          </li> 
          
        </ul>
      </div>
    </nav>
     