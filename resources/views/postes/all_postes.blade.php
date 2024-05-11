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
