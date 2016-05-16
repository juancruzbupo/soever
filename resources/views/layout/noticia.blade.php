<div class="row">
   <div class="col-lg-12">
      <h1 class="page-header" style="font-style: italic;">Noticias</h1>
   </div>
</div>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
   </ol>
   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
      @foreach($noticias as $noticia)
         <div class="item @if($noticia->id === $noticias->first()->id) {{ 'active' }} @endif">
            <div class="row">
               <div class="col-md-6">
                  <img src="{{asset('assets/img/'. $noticia -> imag)}}" alt="" width="550" height="300">
               </div>
               <div class="col-md-6">
                  <h3>{!! $noticia -> titulo !!}</h3>
                  <p>{!! $noticia -> sub_texto !!}.</p>
                  <a class="btn btn-lx btn-primary" href="{!! action('NoticiaController@show', [$noticia->id]) !!}">Ver... <span class="glyphicon glyphicon-chevron-right"></span></a>
               </div>
            </div>
         </div>
      @endforeach
   </div>
   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<hr style="margin-bottom: 7%;">