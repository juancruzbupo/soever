<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
{!! Html::style(asset('public/assets/css/bootstrap.min.css')) !!}
  {!! Html::style(asset('public/assets/css/bootstrap-theme.min.css')) !!}
</head>
<body
style="
 background-image: url('{{asset('public/assets/img/2.jpg')}}');
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-attachment: fixed;
">
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgba(255,255,255,.3);">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmacion</h4>
            </div>
            <div class="modal-body">
                <p></p>
                <p class="alert alert-success" role="alert">{!! $mensaje !!}</p>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="inicio();" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>


  <script src='public/assets/js/jquery.js'></script>
  <!-- Bootstrap Core JavaScript -->
  <script src='public/assets/js/bootstrap.min.js'></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
    function inicio(){
        location.href="http://soever.com.ar";
    }
</script>
</body>
</html>