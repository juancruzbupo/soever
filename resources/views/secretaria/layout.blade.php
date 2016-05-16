<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="{{asset('public/assets/img/log.ico')}}"/>
	<title>Soever</title>
	{!! Html::style(asset('public/assets/css/bootstrap.min.css')) !!}
  {!! Html::style(asset('public/assets/css/bootstrap-theme.min.css')) !!}

  <link href='public/assets/css/styles.css' rel="stylesheet">

  <!-- Custom Fonts -->
  <link href='public/assets/font-awesome/css/font-awesome.min.css' rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">



  @yield('head')

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
          <li><a class="page-scroll btn btn-warning" href="{!! action('InicioController@index') !!}"><h5>HOME</h5></a></li>
        <br>

          <div class="fb-page" data-href="https://www.facebook.com/Soever-498236953648417/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
        </ul>

      </div><!--/left-->

      <!--right-->
      <div class="col-md-9" style="margin-top: 2%;">

          @yield('content')

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

  <script src="public/assets/js/jqBootstrapValidation.js"></script>

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