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
            <a href="{{route('dashboardpage')}}" class="nav-link">
              <i class="link-icon" data-feather="home"></i>
              <span class="link-title">Acceil</span>
            </a>
          </li>
          <li class="nav-item nav-category">Developeurs Categories</li>
          

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emai" role="button" aria-expanded="false" aria-controls="emai">
              <i class="link-icon" data-feather="code"></i>
              <span class="link-title">Developeurs</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emai">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('alldevelopers') }}" class="nav-link">Tout les Developeurs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('adddeveloper') }}" class="nav-link">Ajouter un Developeur</a>
                </li>
              </ul>
            </div>
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
                  <a href="#" class="nav-link">Tout les Postes</a>
                </li>
              </ul>
            </div>
          </li>

          





          
          <li class="nav-item nav-category">Codes des Components </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">UI</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                
                <li class="nav-item">
                  <a href="{{ route('alerts') }}" class="nav-link">Alertes</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('badges') }}" class="nav-link">Badges</a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ route('buttons') }}" class="nav-link">Bouttons</a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ route('cards') }}" class="nav-link">Cartes</a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ route('listgroup') }}" class="nav-link">Liste groupe</a>
                </li>
                
                
                <li class="nav-item">
                  <a href="{{ route('navbar') }}" class="nav-link">Barre de navigation</a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ route('progress') }}" class="nav-link">Progrés</a>
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
                  <a href="{{ route('sortable') }}" class="nav-link">Sortes des tableau</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('sweetalert') }}" class="nav-link">Douce Alerte</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Formilaire</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('basic') }}" class="nav-link">Elements Essentiel</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('advanced') }}" class="nav-link">Elements Advancé</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('editor') }}" class="nav-link">Editeurs</a>
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
                  <a href="{{ route('apex') }}" class="nav-link">Sommet</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('chartjs') }}" class="nav-link">Graphique Js</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('flot') }}" class="nav-link">Flottant</a>
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
                  <a href="{{route('basictable')}}" class="nav-link">Tableau Essentiel</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('datatable')}}" class="nav-link">Tableau des donneés</a>
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
                  <a href="{{route('feather')}}" class="nav-link">Icones Plumé</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('flag')}}" class="nav-link">Icones des payes</a>
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
                  <a href="{{route('aboutus')}}" class="nav-link">A propos de nous</a>
                </li>
                
              </ul>
            </div>
          </li> 
          
        </ul>
      </div>
    </nav>
     