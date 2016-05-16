<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{asset('public/assets/img/log.ico')}}"/>
		<title>SOEVER</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='public/assets/css/bootstrap.min.css' rel="stylesheet">
    <link href='public/assets/css/styles.css' rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='public/assets/font-awesome/css/font-awesome.min.css' rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <style type="text/css">
      .carousel-inner{
        width:100%;
        max-height: 350px !important;
      }

      .thumbnail{
        width:100%;
        height: 550px;
        max-height: 550px !important;
      }

      .caption{
        width:100%;
        height: 100%;
        max-height: 100% !important;
      }

      .log{
        color: #8f1218;
      }
    </style>

    <meta property='og:url'           content='http://soever.com.ar' />
    <meta property='og:type'          content='website' />
    <meta property='og:title'         content='SOEVER.COM.AR ' />
    <meta property="og:description"   content="Pagina oficial SOEVER" />
    <meta property='og:image'         content='{{asset("public/assets/img/2.jpg")}}' />

	</head>
<body id="page-top" data-spy="scroll">

  <div id="masthead">
    <div class="container">
        <div id="sec0" class="row">
          <div class="col-md-12">
            <img name="usaMap" style="margin-top: 5px; margin-left: 5px;" class="img-responsive" width="100%" src="{{asset('public/assets/img/header.jpg')}}" alt="" usemap=#m_usaMap>
            <map name=m_usaMap>
              <area href='#'
              shape='rect'
              coords='860,30,740,180'>
            </map>
          </div>
          <div class="col-md-9 pull-right" >
            <button class="btn btn-warning dropdown-toggle glyphicon glyphicon-file" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <strong>Delegados</strong>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="{!! asset('/public/assets/pdf/Delegados_Casa_Central.pdf') !!}">Casa Central</a></li>
                <li><a href="{!! asset('/public/assets/pdf/Delegados_Mto_y_Stro.pdf') !!}">Mantenimiento y Suministro</a></li>
                <li><a href="{!! asset('/public/assets/pdf/Delegados_KM8.pdf') !!}">KM 8</a></li>
              </ul>
            <a type="button" href="{!! asset('/public/assets/pdf/estatutosindical.pdf') !!}" class="btn btn-warning"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <strong>Estatus Social</strong></a>
            <a type="button" href="{!! asset('/public/assets/pdf/cct.pdf') !!}" class="btn btn-warning"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <strong>Ley 20.320 </strong></a>
            <a type="button" href="{!! asset('/public/assets/pdf/cct.pdf') !!}" class="btn btn-warning"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <strong>C.C.T N° 572/09 </strong></a>
            <a type="button" href="{!! asset('/public/assets/comdirectiva.pdf/') !!}" class="btn btn-warning"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <strong>Comisiones del Interior </strong></a>
            <ul class="nav navbar-right">
              <li>
                @if(Auth::check())
                  <a href="{{url('auth/logout')}}" class="log glyphicon glyphicon-off"></a>
                @else
                  <a href="{{url('auth/login')}}" class="log glyphicon glyphicon-user"></a>
                @endif
              </li>
            </ul>
          </div>
        </div>
    </div><!--/container-->
</div><!--/masthead-->

<!--main-->
<div class="container">
	<div class="row">
      <!--left-->
      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar">
          <div class="fb-page" data-href="https://www.facebook.com/Soever-498236953648417/?fref=ts" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
          <li><a class="page-scroll btn btn-warning" href="#sec0"><h5>HOME</h5></a></li>
          <li><a class="page-scroll btn btn-warning" href="#sec1"><h5>NOTICIA</h5></a></li>
          <li><a class="page-scroll btn btn-warning" href="#sec2"><h5>GALERIA</h5></a></li>
          <li><a class="page-scroll btn btn-warning" href="#sec3"><h5>INSTITUCIONAL</h5></a></li>
          <li><a class="page-scroll btn btn-warning" href="#sec4"><h5>SERVICIO</h5></a></li>
          <li><a class="page-scroll btn btn-warning" href="#sec5"><h5>CONTACTO</h5></a></li>
          <li>
            <div style="margin-top: 10%; margin-bottom: 2%; text-align:center;">
                <div>
                  <p style="color: #8f1218;"><strong> Sitios de interés  </strong></p>
                </div>
                <div align="center">
                    <a href="#"><img class="img-responsive" src="{{asset('public/assets/img/esc1.jpg')}}" alt=""  align="center" width="49%;" height="80px"></a>
                </div>
            </div>
          </li>


        </ul>
      </div><!--/left-->

      <!--right-->
      <div class="col-md-9" style="margin-top: 2%;">
        <img src="{{asset('public/assets/img/2.jpg')}}" alt="" width="100%">

        <hr>

        <h2 align="center" style="margin-top: 10%; color: #8f1218;" id="sec1">NOTICIA
          @if(Auth::check())
            <a href="{!! action('NoticiaController@create') !!}" class="btn btn-primary" role="button">Crear</a>
          @endif
        </h2>

         @foreach($noticias as $noticia)
          @if($cont == 0)
          <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
            @endif

              @if($cont < 3)
              <div class="item @if($noticia->id === $noticias->first()->id) {{ 'active' }} @endif">
                <div class="jumbotron">
                  <div class="row">
                       <div class="col-md-6">
                          <a href="{!! action('NoticiaController@show', [$noticia->id]) !!}"><img src="{{asset('public/assets/img/'. $noticia -> imag)}}" alt="" class="img-responsive" width="380" height="200"></a>
                       </div>
                       <div class="col-md-6">
                          <h3><a href="{!! action('NoticiaController@show', [$noticia->id]) !!}"><strong>{!! $noticia -> titulo !!}</strong></a></h3>
                          <p>{!! $noticia -> sub_texto !!}</p>
                       </div>
                    </div>
                </div>
              </div>
              @endif

            @if($cont == 2)
            </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            @endif

        @if($cont > 2)
        <!-- fin carousel -->
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
              <a href="{!! action('NoticiaController@show', [$noticia->id]) !!}">
                <img src="{{asset('public/assets/img/'. $noticia -> imag)}}" alt="..." height="100" class="img-responsive"></a>
                <div class="caption">
                  <h3><a href="{!! action('NoticiaController@show', [$noticia->id]) !!}"><strong>{!! $noticia -> titulo !!}</strong></a></h3>
                  <p>{!! $noticia -> sub_texto !!}</p>
                </div>
              </div>
            </div>
        @endif

        <?php $cont = $cont + 1?>

        @endforeach
        <hr>

        <h2 align="center"  style="margin-top: 10%; color: #8f1218;" id="sec2">GALERIA</h2>

          <section id="portfolio" class="content-section">
            @include('layout.galeria')
          </section>



        <hr>

        <h2 align="center" style="margin-top: 10%; color: #8f1218;" id="sec3">  INSTITUCIONAL</h2>
        <p>
          <h3 style="color: #8f1218;"><strong> Quienes somos </strong></h3>
        </p>

        <p>
          <h4>
          El Sindicato de Obreros y Empleados Viales de Entre Ríos (Soever) es una organización sindical de primer grado,  fundado a los cuatro días del mes de Diciembre del año 1947, con Personería Gremial N° 736. Afiliada a la Federación Argentina de Trabajadores Viales (FAT Vial), y adherida a la Confederación General del Trabajo (CGT).
          </h4>
        </p>

        <p>
          <h3 style="color: #8f1218;"><strong> Que hacemos </strong></h3>
        </p>

        <p>
          <h4>
          <p> El Soever representa a todos los trabajadores sociales provinciales, comprendidos en el Convenio Colectivo de Trabajo (actualmente CCT N° 572/09) que desarrollan una actividad vial, cualquiera fuera su relación de dependencia en funciones Técnicas, Jerárquicas, Administrativas, manuales y de servicio dentro de la Provincia de Entre Ríos.</p>  
          <p> Tiene como objetivo representar a los trabajadores viales afiliados en forma colectiva o individual, en las cuestiones que hacen a sus derechos o reivindicaciones ente el Estado, la Justicia y los empleados. Celebrar Convenio Colectivos de Trabajo a través de la Federación Argentina de Trabajadores Viales (FAT Vial). Cumplir y hacer cumplir los Contratos Colectivos de Trabajo y las Leyes. Proponer permanentemente a la superación de las condiciones contractuales que rigen la actividad vial. Tener que, en toda actividad, el trabajo humano debe ser una labor social regida por una norma ética basada en principios de justicia social. Prestar los servicios de Obra Social a través de la FAT Vial y su organismo de atención de la salud de los trabajadores viales y su núcleo familiar.</p> 
          <p> Promueve la representación de los trabajadores en la conducción de los organismos viales empleadores, en el marco de la co-gestión a fin de posibilitar el protagonismo y la participación de los trabajadores para apostar la eficiencia de las vialidades y al mejoramiento de las condiciones de trabajo. Alentar y fortalecer la unidad y la solidaridad entre todos los trabajadores viales, utilizando para ello todos los medios a su alcance.-</p> 

          </h4>
        </p>

        <p>
          <h3 style="color: #8f1218;"><strong> Comision Directiva </strong></h3>
        </p>

        <p>
          <h4>
            La Comisión Directiva Central del Soever está compuesta por 11 miembros. Tiene como deberes y atribuciones realizar, en general, todos los actos que sean necesarios para que el Sindicato de Trabajadores Viales cumpla sus fines. 
          </h4>
        </p>

        <br>

        <div align="right">
          <a type="button" href="{!! url('secretarias') !!}" class="btn btn-warning" style="align: center;"> <h4> <strong>Secretarías</strong> </h4></a>
        </div>

        <hr>

        <h2 align="center" style="margin-top: 10%; color: #8f1218;" id="sec4">SERVICIO</h2>


        <br>
        <div>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active panel-title btn-warning"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Club Vial (alquiler de salones, canchas)</a></li>
            <li role="presentation" class="panel-title btn-warning"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Hospedaje Paraná</a></li>
            <li role="presentation" class="panel-title btn-warning"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Hotel 05 de octubre Buenos Aires</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <img src="{{asset('public/assets/img/ClubVial.jpg')}}" class="img-responsive" alt="" width="100%">
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
               <img src="{{asset('public/assets/img/Hospedaje.jpg')}}" class="img-responsive" alt="" width="100%">
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
              <img src="{{asset('public/assets/img/Hotel.jpg')}}" class="img-responsive" alt="" width="100%">
            </div>
          </div>
        </div>

      <hr>

      <div class="jumbotron content-section text-center">
        <div class="row" style="margin-bottom: 5%;">
              <div class="col-lg-12 text-center">
                  <h2 id="sec5" class="col-lg-12 section-subheading text-muted">CONTACTO</h2>
              </div>
              <div class="col-lg-12 text-center">
                  <h4 class="col-lg-12 section-subheading text-muted">No dude en enviarme un correo electrónico para proporcionar alguna información, dar sugerencias para nuevas ideas y temas.
                  Los campos con (*) son obligatorios.</h4>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
              {!! Form::open(array('action' => 'InicioController@sendMail', 'method' => 'post', 'novalidate')) !!}
                      <div class="row">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="col-lg-12">
                              <div class="form-group">
                                  <input type="email" class="form-control" placeholder="Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Asunto *" id="asunto" name="asunto" required data-validation-required-message="Please enter your name.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-group">
                                  <input type="tel" class="form-control" placeholder="Telefono" id="telefono" name="telefono">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-group">
                                  <textarea class="form-control" placeholder="Mensaje *" id="mensaje" name="mensaje" required data-validation-required-message="Please enter a message." rows="10"></textarea>
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-lg-12 text-center">
                              <div id="success"></div>
                              <button type="submit" class="btn btn-lg btn-success">Enviar</button>
                          </div>
                      </div>
                  {!! Form::close() !!}
                  <br>
                  @if ($errors->any())
                    <script>
                     alert( "ERROR al enviar e-mail campo/s incompleto/s." );
                    </script>
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
              </div>
          </div>
      </div>

      </div><!--/right-->
  	</div><!--/row-->
  </div><!--/container-->

  <div class="container">
    @include('layout.megaleria')

    @include('layout.mgaleria')
  </div>

	<script src='public/assets/js/jquery.js'></script>
  <!-- Bootstrap Core JavaScript -->
  <script src='public/assets/js/bootstrap.min.js'></script>
  <!-- Plugin JavaScript -->
  <script src='public/assets/js/jquery.easing.min.js'></script>
  <!-- Custom Theme JavaScript -->

  <script src='public/assets/js/scripts.js'></script>

  <script src="public/assets/js/imageMapResizer.min.js"></script>

  <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=936434406379228";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  </script>

  <script type="text/javascript">

    $('map').imageMapResize();

  </script>   
</body>
</html>