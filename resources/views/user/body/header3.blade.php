<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					
						<div class="input-group">
              <div class="input-group-text">
                <i data-feather="adress"></i>
                
                <p class="text-muted"><i data-feather="location"></i>NOUAKCHOTT-MAURITANIA  -- <i data-feather="phone"></i> +22241864369  --  <i data-feather="website"></i>MAURI-DEVELOPER.COM<i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
              </div>
						</div>
					
					<ul class="navbar-nav">
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					<i class="flag-icon flag-icon-fr mt-1" title="fr"></i> <span class="ms-1 me-1 d-none d-md-inline-block"> France</span>
					</a>
    
					</li>

						
            @php
            $id = Auth::user()->id;
            $profileData = App\Models\User::find($id);


            @endphp
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="wd-30 ht-30 rounded-circle" src="{{ !empty($profileData->photo) ?  url('logo/user_images/'. $profileData->photo): url('logo/no_image.jpg') }}" alt="profile">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
										<img class="wd-80 ht-80 rounded-circle" src="{{ !empty($profileData->photo) ?  url('logo/user_images/'. $profileData->photo): url('logo/no_image.jpg') }}" alt="">
									</div>
									<div class="text-center">
										<p class="tx-16 fw-bolder">{{$profileData->name}}</p>
										<p class="tx-12 text-muted">{{$profileData->email}}</p>
									</div>
								</div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="{{ route('profilepage3') }}" class="text-body ms-0">
                      <i class="me-2" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  
          
                  <li class="dropdown-item py-2">
                    <a href="{{ route('exitpage3') }}" class="text-body ms-0">
                      <i class="me-2" data-feather="log-out"></i>
                      <span>Sortir</span>
                    </a>
                  </li>
                </ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>