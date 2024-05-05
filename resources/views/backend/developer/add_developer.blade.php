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

            <h6 class="card-title">Add Developer</h6>
            <br>
            <br>
            <form class="forms-sample" method="POST" action="{{ route('storedeveloper') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="developer_image" class="form-label">Developer Image</label>
                    <input type="file" class="form-control @error('developer_image') is-invalid @enderror" id="image" name="developer_image">
                    @error('developer_image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_name" class="form-label">Developer Name</label>
                    <input type="text" name="developer_name" class="form-control @error('developer_name') is-invalid @enderror">
                    @error('developer_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_email" class="form-label">Developer Email</label>
                    <input type="text" name="developer_email" class="form-control @error('developer_email') is-invalid @enderror">
                    @error('developer_email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_tag" class="form-label">Developer Tag</label>
                    <input type="text" name="developer_tag" class="form-control @error('developer_tag') is-invalid @enderror">
                    @error('developer_tag')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_phone" class="form-label">Developer Phone</label>
                    <input type="text" name="developer_phone" class="form-control @error('developer_phone') is-invalid @enderror">
                    @error('developer_phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_category" class="form-label">Developer Category</label>
                    <input type="text" name="developer_category" class="form-control @error('developer_category') is-invalid @enderror">
                    @error('developer_category')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="developer_price_services" class="form-label">Developer Price_Services</label>
                    <input type="text" name="developer_price_services" class="form-control @error('developer_price_services') is-invalid @enderror">
                    @error('developer_price_services')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary me-2">Add</button>
            </form>

        </div>
    </div>
</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/lips/jquery/3.6.3/jquery.min.js"></script>

@endsection
