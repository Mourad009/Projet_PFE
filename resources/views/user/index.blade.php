@extends('user.user_dashboard')

@section('user')

<div class="page-content">

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Accueil</h4>
  </div>
  <div class="d-flex align-items-center flex-wrap text-nowrap">
    <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
      <input type="text" class="form-control bg-transparent border-primary" data-input>
      <i data-feather="calendar" class="text-primary"></i>
</div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow-1">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">UTILISATEURS</h6>
              <div class="dropdown mb-2">
                
              </div>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">{{$totalUsers}}</h3>
                <div class="d-flex align-items-baseline">
                  <p class="text-success">
                    <span></span>
                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                  </p>
                </div>
              </div>
              <div class="col-6 col-md-12 col-xl-7">
              <img src="{{asset('logo/users.png')}}" alt="">
                          </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">DEVELOPEURS</h6>
              <div class="dropdown mb-2">
               
              </div>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">{{$totalDevelopers}}</h3>
                <div class="d-flex align-items-baseline">
                  <p class="text-danger">
                    <span></span>
                    <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                  </p>
                </div>
              </div>
              <div class="col-6 col-md-12 col-xl-7">
              <img width="80px" src="{{asset('logo/dev.png')}}" alt="">
                          </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div> <!-- row -->




   
  <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Tout les developeurs</h6>
                <div class="table-responsive"><br>
                <p class="btn btn-inverse-info">Recherché par : Technologie</p><br><br>
                 
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Technologie</th>
                        <th>Telephone</th>
                        <th>Categorie</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($developers as $key => $item)
                      <tr>
                        <td>
                        <div>
                        <img class="wd-80 rounded-circle" src="{{ asset('logo/developer_images/'.$item->developer_image) }}" alt="profile">
                        </div>
                        </td>
                        <td>{{$item->developer_name}}</td>
                        <td>{{$item->developer_email}}</td>
                        <td>{{$item->developer_tag}}</td>
                        <td>{{$item->developer_phone}}</td>
                        <td>{{$item->developer_category}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div> 
          <!-- row -->

@endsection