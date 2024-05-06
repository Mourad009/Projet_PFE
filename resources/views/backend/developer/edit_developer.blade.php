@extends('user.user_dashboard')

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

            <h6 class="card-title">Modifier developeur</h6>
            <br>
            <br>
            <form class="forms-sample" method="POST" action="{{ route('updatedeveloper')}}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{$developers->id}}">

                <div class="mb-3">
                    <label for="developer_image" class="form-label"> Image</label>
                    <input type="file" class="form-control" id="image" name="developer_image">
                    <div class="mb-3">
                        <br>
                    <label for="developer_image" class="form-label"></label>
                    <img id="showImage" class="wd-80 rounded-circle" src="{{ !empty($developers->developer_image) ? url('logo/developer_images/'. $developers->developer_image) : url('logo/no_image.jpg') }}" alt="profile">
            </div>
                </div>

                <div class="mb-3">
                    <label for="developer_name" class="form-label"> Nom</label>
                    <input type="text" name="developer_name" class="form-control @error('developer_name') is-invalid @enderror" value="{{ $developers->developer_name }}">
                    @error('developer_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_email" class="form-label"> Email</label>
                    <input type="text" name="developer_email" class="form-control @error('developer_email') is-invalid @enderror" value="{{ $developers->developer_email }}">
                    @error('developer_email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_tag" class="form-label"> Technologie</label>
                    <input type="text" name="developer_tag" class="form-control @error('developer_tag') is-invalid @enderror" value="{{ $developers->developer_tag }}">
                    @error('developer_tag')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_phone" class="form-label"> Telephone</label>
                    <input type="text" name="developer_phone" class="form-control @error('developer_phone') is-invalid @enderror" value="{{ $developers->developer_phone }}">
                    @error('developer_phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_category" class="form-label"> Categorie</label>
                    <input type="text" name="developer_category" class="form-control @error('developer_category') is-invalid @enderror" value="{{ $developers->developer_category }}">
                    @error('developer_category')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
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
