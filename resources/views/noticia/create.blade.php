@extends('noticia.layout')

@section('content')
<div class="col-md-12">

	<hr>

	<div class="row">
		<h1>Cargar Noticia</h1>
	</div>

	@if ($errors->any())
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Por favor corrige los siguentes errores:</strong>
			<ul>
				@foreach ($errors->all() as $error)
				  <li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
    @endif

	<div class="row">
		{!! Form::open(array('action' => 'NoticiaController@store', 'method' => 'post', 'class'=>'form-horizontal','files' => true)) !!}
			@include('noticia._form')
		{!! Form::close() !!}
	</div>

</div>

<script src="{{ asset('public/vendors/ckeditor/ckeditor.js') }}"></script>

@endsection
