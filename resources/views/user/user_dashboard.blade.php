<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="icon" type="image/png" href="{{ asset('logo/favicon.png')}}">

	<link rel="stylesheet" href="{{asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">


	<!-- forms css  -->

	<link rel="stylesheet" href="{{asset('backend/assets/vendors/easymde/easymde.min.css') }}">

	<link rel="stylesheet" href="{{asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">

	<link rel="stylesheet" href="{{asset('backend/assets/vendors/select2/select2.min.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/dropzone/dropzone.min.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/dropify/dist/dropify.min.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/pickr/themes/classic.min.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">
	

	

	<title>Mauri - Developpeur</title>
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/cropperjs/cropper.min.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/sweetalert2/sweetalert2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/prismjs/themes/prism.css')}}">	

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl.carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl.carousel/owl.theme.default.min.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href=" {{ asset('backend/assets/vendors/core/core.css') }}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href=" {{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">

	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href=" {{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href=" {{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href=" {{ asset('backend/assets/css/demo2/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href=" {{ asset('backend/assets/images/favicon.png') }}" />

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		@include('user.body.sidebar')


		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			@include('user.body.header')
			<!-- partial -->

            @yield('user')

			<!-- partial:partials/_footer.html -->
			@include('user.body.footer')
			<!-- partial -->
		
		</div>
	</div>

	<script src="{{ asset('backend/assets/js/cropper.js') }}"></script>

	<script src="{{asset('backend/assets/vendors/cropperjs/cropper.min.js') }}"></script>


	<script src="{{ asset('backend/assets/js/code/code.js') }}"></script>
	<script src="{{ asset('backend/assets/js/code/validate.min.js') }}"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- core:js -->
	<script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
	
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('backend/assets/js/template.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	 <script src="{{ asset('backend/assets/js/dashboard-dark.js') }}"></script>
	<!-- End custom js for this page -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="{{ asset('backend/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
  <script src="{{ asset('backend/assets/js/data-table.js') }}"></script>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="{{asset('backend/assets/vendors/owl.carousel/owl.carousel.min.js') }}"></script>
	<script src="{{asset('backend/assets/js/sortablejs-dark.js') }}"></script>
	<script src="{{asset('backend/assets/vendors/sortablejs/Sortable.min.js') }}"></script>
	<script src="{{asset('backend/assets/vendors/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{asset('backend/assets/js/sweet-alert.js') }}"></script>

  <script src="{{asset('backend/assets/vendors/prismjs/prism.js')}}"></script>
<script src="{{ asset('backend/assets/vendors/clipboard/clipboard.min.js')}}"></script>

<script src="{{ asset('backend/') }}assets/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="{{ asset('backend/assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/inputmask/jquery.inputmask.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/select2/select2.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/dropzone/dropzone.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/dropify/dist/dropify.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/pickr/pickr.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/moment/moment.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
	<script src="{{ asset('backend/assets/js/form-validation.js') }}"></script>
	<script src="{{ asset('backend/assets/js/bootstrap-maxlength.js') }}"></script>
	<script src="{{ asset('backend/assets/js/inputmask.js') }}"></script>
	<script src="{{ asset('backend/assets/js/select2.js') }}"></script>
	<script src="{{ asset('backend/assets/js/typeahead.js') }}"></script>
	<script src="{{ asset('backend/assets/js/tags-input.js') }}"></script>
	<script src="{{ asset('backend/assets/js/dropzone.js') }}"></script>
	<script src="{{ asset('backend/assets/js/dropify.js') }}"></script>
	<script src="{{ asset('backend/assets/js/pickr.js') }}"></script>
	<script src="{{ asset('backend/assets/js/flatpickr.js') }}"></script>

	<!-- Plugin js for this page -->
	<script src="{{asset('backend/assets/vendors/chartjs/Chart.min.js')}}"></script>
	<!-- End plugin js for this page -->
  <script src="{{ asset('backend/assets/js/chartjs-dark.js') }}"></script>

	
	<!-- Plugin js for this page -->
	<script src="{{ asset('backend/assets/vendors/tinymce/tinymce.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/easymde/easymde.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/ace-builds/src-min/ace.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/ace-builds/src-min/theme-chaos.js') }}"></script>
	<!-- End plugin js for this page -->

	
	<!-- Custom js for this page -->
	<script src="{{ asset('backend/assets/js/tinymce.js') }}"></script>
	<script src="{{ asset('backend/assets/js/easymde.js') }}"></script>
	<script src="{{ asset('backend/assets/js/ace.js') }}"></script>
	<script src="{{asset('backend/assets/js/apexcharts-dark.js')}}"></script>

	<!-- End custom js for this page -->

	<script src="{{asset('backend/assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{asset('backend/assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('backend/assets/vendors/jquery.flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('backend/assets/vendors/jquery.flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('backend/assets/js/jquery.flot-dark.js')}}"></script>

  <!-- Plugin js for this page -->
  <script src="{{asset('backend/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
	<!-- End plugin js for this page -->
	

<script>

 	@if(Session::has('message'))
 	var type = "{{ Session::get('alert-type','info') }}"
 	switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
	}
	@endif 

 </script>

</body>
</html>    