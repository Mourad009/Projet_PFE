@extends('user.user_dashboard3')

@section('user')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <a href="{{ route('addposte') }}" class="btn btn-inverse-info"><i data-feather="plus"></i>Publier une poste</a>

					</ol>
				</nav>

				<div class="row" style="justify-content: center;">
        
					<div class="col-md-6 grid-margin stretch-card">
            <div class="card">
            @foreach($postes as $key => $item)
            
                        <div>
                        <img width="515px" src="{{ asset('logo/postes_files/'.$item->files) }}" alt="profile">
                        </div>
              <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text mb-3">{{$item->body}}</p>
                <p><a  href="{{$item->link}}"  alt="ajouter une link" ><i data-feather="link">{{$item->link}}</i></a></p><br>
                <div style="text-align: center;">
                @if(Auth::id() == $item->developer_id)
                    <a href="{{ route('editposte', $item->id) }}" class="btn btn-inverse-warning"><i data-feather="edit"></i>Modifier</a>
                    <a href="{{ route('deleteposte', $item->id) }}" class="btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i>Supprimer</a>
                @endif

                   </div>
                  </div>
                  @endforeach
            </div>
					</div>

         
          
				</div>

</div>

@endsection

<!-- <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Developer Image</th>
                        <th>Developer Name</th>
                        <th>Developer Email</th>
                        <th>Developer Tag</th>
                        <th>Developer Phone</th>
                        <th>Developer Category</th>
                        <th>Developer Price_Services</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($postes as $key => $item)
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
                        <td>{{$item->developer_price_services}}</td>
                        <td >
                            <a  href="{{ route('editdeveloper', $item->id) }}" class="btn btn-inverse-warning"><i data-feather="edit"></i>Edit</a>
                            <a  href="{{ route('deletedeveloper', $item->id) }}" class="btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i>Delete</a>
                        </td>
                        
                      </tr>
                      @endforeach
                    </tbody>
                  </table> -->