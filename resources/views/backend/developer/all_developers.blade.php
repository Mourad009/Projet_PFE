@extends('user.user_dashboard')

@section('user')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <a href="{{ route('adddeveloper') }}" class="btn btn-inverse-info"><i data-feather="plus"></i>Add Developer</a>

					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Developers</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
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
                        <td>{{$item->developer_price_services}}</td>
                        <td >
                            <a  href="{{ route('editdeveloper', $item->id) }}" class="btn btn-inverse-warning"><i data-feather="edit"></i>Edit</a>
                            <a  href="{{ route('deletedeveloper', $item->id) }}" class="btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i>Delete</a>
                        </td>
                        
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>

@endsection