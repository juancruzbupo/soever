@extends('noticia.layout')

@section('head')
    <meta property="og:url"           content="http://soever.com.ar/noticia/{!! $noticia -> id !!}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{!! $noticia -> titulo !!}" />
    <meta property="og:description"   content="{!! $noticia -> sub_texto !!}" />
    <meta property="og:image"         content="http://soever.com.ar/public/assets/img/{!! $noticia -> imag !!}" />
@stop

@section('content')
<div class="row col-md-12">

    <div class="row col-lg-12">
    	<div class="col-lg-12">
        	<h1 class="page-header" style="font-style: italic;">{!! $noticia -> titulo !!}
        @if(Auth::check())
            <a href="{!! action('NoticiaController@create') !!}" class="btn btn-primary" role="button">Crear</a>

            {!! Form::open(array('action' => ['NoticiaController@destroy', $noticia -> id], 'method' => 'delete', 'class'=>'form-horizontal')) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
        @endif
        </h1>

        <div class="lead">
            {!! $noticia -> sub_texto !!} 
            <hr>
        </div>       

        </div>
    </div>    

     <div class="row col-lg-12" style="margin-bottom: 40%;">
    	<div class="col-lg-12" style="margin-bottom: 3%">
        	<img class="img-responsive" src="{{asset('public/assets/img/'. $noticia -> imag)}}" alt="" style="margin-bottom: 5%">
            <hr>

            <div align="right">
                <a href="https://www.facebook.com/sharer/sharer.php?u=//soever.com.ar/noticia/{!! $noticia -> id !!}" target="_blank"><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a>

                <a href="http://www.twitter.com/home?status=http://soever.com.ar/noticia/{!! $noticia -> id !!}" target="_blank"><img src="https://lh5.googleusercontent.com/-xZVxH6CsUaQ/UefWwgi8o3I/AAAAAAAAEdk/reo5XS6z8-8/s32-no/twitter.png"></a>

                <a href="https://plus.google.com/share?url=http://soever.com.ar/noticia/{!! $noticia -> id !!}" target="_blank"><img src="https://lh5.googleusercontent.com/-5Q7Sj0SXhOA/UefWwcrnZ-I/AAAAAAAAEdg/auK3wqGCbZE/s32-no/googleplus.png"></a>
            </div>
            <hr>

        <div class="col-lg-12">
        	<h4>{!! $noticia -> texto !!}</h4>
        </div>
    </div>


</div>

@stop