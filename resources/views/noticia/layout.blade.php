<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="{{asset('public/assets/img/log.ico')}}"/>
	<title>SOEVER</title>
	{!! Html::style(asset('public/assets/css/bootstrap.min.css')) !!}

  {!! Html::style(asset('public/assets/css/styles.css')) !!}

  <!-- Custom Fonts -->
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
              coords='1150,30,990,240'>
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
          <li><a class="page-scroll btn btn-warning" href="{!! action('NoticiaController@index') !!}"><h5>VER TODAS</h5></a></li>

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

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="public/assets/js/imageMapResizer.min.js"></script>

  <!-- Custom Theme JavaScript -->
  {!! Html::script(asset('public/assets/js/scripts.js')) !!}

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

    <script>
    //Este string contiene una imagen de 1px*1px color blanco
    window.imagenVacia = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

    window.mostrarVistaPrevia = function mostrarVistaPrevia() {

        var Archivos, Lector;

        //Para navegadores antiguos
        if (typeof FileReader !== "function") {
            jQuery('#img').text('[Vista previa no disponible]');
            return;
        }

        Archivos = jQuery('#img')[0].files;
        if (Archivos.length > 0) {

            Lector = new FileReader();
            Lector.onloadend = function(e) {
                var origen, tipo;

                //Envia la img a la pantalla
                origen = e.target; //objeto FileReader
                //Prepara la información sobre la img
                tipo = window.obtenerTipoMIME(origen.result.substring(0, 30));

                jQuery('#img').text(Archivos[0].name + ' (Tipo: ' + tipo + ')');
                //Si el tipo de archivo es válido lo muestra, 
                //sino muestra un mensaje 
                if (tipo !== 'image/jpeg' && tipo !== 'image/png' && tipo !== 'image/gif') {
                    jQuery('#vistaPrevia').attr('src', window.imgVacia);
                    alert('El formato de img no es válido: debe seleccionar una img JPG, PNG o GIF.');
                } else {
                    jQuery('#vistaPrevia').attr('src', origen.result);
                    window.obtenerMedidas();
                }

            };
            Lector.onerror = function(e) {
                console.log(e)
            }
            Lector.readAsDataURL(Archivos[0]);

        } else {
            var objeto = jQuery('#img');
            objeto.replaceWith(objeto.val('').clone());
            jQuery('#vistaPrevia').attr('src', window.imgVacia);
            jQuery('#img').text('[Seleccione una img]');
        };


    };

    //Lee el tipo MIME de la cabecera de la img
    window.obtenerTipoMIME = function obtenerTipoMIME(cabecera) {
        return cabecera.replace(/data:([^;]+).*/, '\$1');
    }

    //Obtiene las medidas de la img y las agrega a la 
    //etiqueta infoTamaño
    window.obtenerMedidas = function obtenerMedidas() {
        jQuery('<img/>').bind('load', function(e) {

            var tamaño = '; Medidas: ' + this.width + 'x' + this.height;

            jQuery('#img').text(tamaño);

        }).attr('src', jQuery('#vistaPrevia').attr('src'));
    }

    jQuery(document).ready(function() {

        //Cargamos la img "vacía" que actuará como Placeholder
        jQuery('#vistaPrevia').attr('src', window.imgVacia);

        //El input del archivo lo vigilamos con un "delegado"
        jQuery('#botonera').on('change', '#img', function(e) {
            window.mostrarVistaPrevia();
        });

        //El botón Cancelar lo vigilamos normalmente
        jQuery('#cancelar').on('click', function(e) {
            var objeto = jQuery('#img');
            objeto.replaceWith(objeto.val('').clone());

            jQuery('#vistaPrevia').attr('src', window.imgVacia);
            jQuery('#img').text('[Seleccione una imagen]');
        });

    });
    </script>

</body>
</html>