@extends('user.user_dashboard2')

@section('user')



<div class="page-content">


        
        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <div>
                    <img class="wd-100 rounded-circle" src="{{ !empty($profileData->photo) ?  url('logo/user_images/'. $profileData->photo): url('logo/no_image.jpg') }}" alt="profile">
                    <span class="h4 ms-3 text-white">{{ $profileData->username}}</span>
                  </div> 
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Nom:</label>
                  <p class="text-muted">{{ $profileData->name}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">{{ $profileData->email}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Telephone:</label>
                  <p class="text-muted">{{ $profileData->phone}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                  <p class="text-muted">{{ $profileData->address}}</p>
                </div>
                
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-4 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
              <div class="card-body">

								<h6 class="card-title">Modifier Profile</h6>
								<form class="forms-sample" method="POST" action="{{ route('profilestore2')}}" enctype="multipart/form-data">
                  @csrf

                  
									<div class="mb-3">
										<label for="username" class="form-label">Nom d'utilisateur</label>
										<input type="text" class="form-control" name="username" id="username" autocomplete="off" value="{{ $profileData->username }}">
									</div>
									<div class="mb-3">
										<label for="name" class="form-label">Nom Complet</label>
										<input type="text" class="form-control" id="name" name="name" value="{{ $profileData->name }}">
									</div>
                  <div class="mb-3">
										<label for="email" class="form-label">Email</label>
										<input type="email" class="form-control" id="email" name="email" value="{{ $profileData->email }}">
									</div>
                  <div class="mb-3">
										<label for="phone" class="form-label">Telephone</label>
										<input type="text" class="form-control" id="phone" name="phone" value="{{ $profileData->phone }}">
									</div>
                  <div class="mb-3">
										<label for="address" class="form-label">Address</label>
										<input type="text" class="form-control" id="address" name="address" value="{{ $profileData->address }}">
									</div>
									<div class="mb-3">
										<label for="photo" class="form-label">Image</label>
										<input type="file" class="form-control" id="image" name="photo">
									</div>

                  <div class="mb-3">
										<label for="photo" class="form-label"></label>
                    <img id="showImage" class="wd-80 rounded-circle" src="{{ !empty($profileData->photo) ?  url('logo/user_images/'. $profileData->photo): url('logo/no_image.jpg') }}" alt="profile">
									</div>

									<button type="submit" class="btn btn-primary me-2">Modifier</button>
								</form>

              </div>
            </div>
            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
          
          <!-- right wrapper end -->
        </div>

			</div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript">


      $(document).ready(function(){

        $('#image').change(function(e){

          var reader = new FileReader();
          reader.onload = function(e) {

            $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
        });
      });
    </script>



@endsection