@extends('user.user_dashboard')

@section('user')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Forms</a></li>
						<li class="breadcrumb-item active" aria-current="page">Editors</li>
					</ol>
        </nav>
        
        <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">TinyMCE</h4>
								<p class="text-muted mb-3">Read the <a href="https://www.tiny.cloud/docs/" target="_blank"> Official TinyMCE Documentation </a>for a full list of instructions and other options.</p>
								<textarea class="form-control" name="tinymce" id="tinymceExample" rows="10"></textarea>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">EasyMDE</h4>
								<p class="text-muted mb-3">Read the <a href="https://easy-markdown-editor.tk/" target="_blank"> Official EasyMDE Documentation </a>for a full list of instructions and other options.</p>
								<textarea class="form-control" name="tinymce" id="easyMdeExample" rows="10"></textarea>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12 stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Ace Editor</h4>
								<p class="text-muted mb-3">Read the <a href="https://ace.c9.io/" target="_blank"> Official Ace Editor Documentation </a>for a full list of instructions and other options.</p>
								<div class="row">
									<div class="col-md-12 grid-margin">
										<h5 class="card-subtitle mb-2">HTML Mode</h5>
<textarea id="ace_html" class="ace-editor w-100">

<div class="card">
	<div class="card-body">
		<h5 class="card-title">Special title treatment</h5>
		<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		<a href="#" class="btn btn-primary">Go somewhere</a>
	</div>
</div>

<div class="card text-center">
	<div class="card-body">
		<h5 class="card-title">Special title treatment</h5>
		<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		<a href="#" class="btn btn-primary">Go somewhere</a>
	</div>
</div>

<div class="card text-end">
	<div class="card-body">
		<h5 class="card-title">Special title treatment</h5>
		<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		<a href="#" class="btn btn-primary">Go somewhere</a>
	</div>
</div>

</textarea>
	</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>

      @endsection