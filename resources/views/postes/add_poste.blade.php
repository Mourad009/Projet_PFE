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

            <h6 class="card-title">Ajouter une postes</h6>
            <br>
            <br>
            <form class="forms-sample" method="POST" action="{{ route('storeposte') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="files" class="form-label">Fichier</label>
                    <span class="text-danger">NB : extension = jpg,jpeg,png,svg,webp</span>
                    <input type="file" class="form-control @error('files') is-invalid @enderror" id="image" name="files">
                    @error('files')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Contenu</label>
                    <input type="tex" name="body" class="form-control @error('body') is-invalid @enderror">
                    @error('body')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="tex" name="link" class="form-control">
                    
                </div>

                <button type="submit" class="btn btn-primary me-2">Publier</button>
            </form>

        </div>
    </div>
</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/lips/jquery/3.6.3/jquery.min.js"></script>

@endsection
