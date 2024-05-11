@extends('user.user_dashboard3')

@section('user')

<br>
<br>
<br>
<br>
<div class="col-md-11 col-xl-11 middle-wrapper">

<style type="text/css">
    .row {
        margin-left: 25px;
    }
</style>
<div class="row">
    <div class="card">
        <div class="card-body">

            <h6 class="card-title">Modifier Poste</h6>
            <br>
            <br>
            <form class="forms-sample" method="POST" action="{{ route('updateposte')}}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{$postes->id}}">

                <div class="mb-3">
                    <label for="files" class="form-label">Fichier</label>
                    <input type="file" class="form-control" id="image" name="files">
                    <div class="mb-3">
                        <br>
                    <img id="showImage" class="wd-80 rounded-circle" src="{{ !empty($postes->files) ? url('logo/postes_files/'. $postes->files) : url('logo/no_image.jpg') }}" alt="profile">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $postes->title }}">
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Contenu</label>
                    <input type="text" name="body" class="form-control @error('body') is-invalid @enderror" value="{{ $postes->body }}">
                    @error('body')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" name="link" class="form-control" value="{{ $postes->link }}">
                    
                </div>
                
                <button type="submit" class="btn btn-primary me-2">Modifier</button>
            </form>

            

        </div>
    </div>
</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#image').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
