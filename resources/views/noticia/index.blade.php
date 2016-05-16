@extends('noticia.layout')

@section('content')
 <br>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="font-style: italic;">NOTICIAS
        @if(Auth::check())
        	<a href="{!! action('NoticiaController@create') !!}" class="btn btn-primary" role="button">Crear</a>
        @endif
            </h1>
    </div>
</div>

<div class="col-md-12 noticias" style="margin-right: 5%; margin-bottom: 40%;">
        <!-- Project One -->
    @foreach ($noticias as $noticia)
        <div class="row">
            <div class="col-md-7">
                <a href="{!! action('NoticiaController@show', [$noticia->id]) !!}">
                    <img class="img-responsive" src="{{asset('public/assets/img/'. $noticia -> imag)}}" alt="" width="500" height="300">
                </a>
            </div>
            <div class="col-md-5">
                <h3><a href="{!! action('NoticiaController@show', [$noticia->id]) !!}">{!! $noticia -> titulo !!}</a></h3>
                <p>{!! $noticia -> sub_texto !!}</p>
                @if(Auth::check())
                    {!! Form::open(array('action' => ['NoticiaController@destroy', $noticia -> id], 'method' => 'delete', 'class'=>'form-horizontal')) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>

        <hr>
	@endforeach

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            {!!$noticias->appends(['sortByDesc' => 'id'])->render(); !!}
        </div>
    </div>
    <!-- /.row -->
</div>
@stop