<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" style="color: #111;">Edicion de galeria</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              {!! Form::open(array('action' => 'InicioController@cambioImg', 'method' => 'post', 'class'=>'form-horizontal', 'style'=> 'color: #111;','files' => true)) !!}

                <div class="form-group">
                  {!! Form::label('img', 'Imagen', array('class'=>'col-sm-2 control-label', 'style'=> 'color: #111;')) !!}
                  <div class="col-sm-8">
                    {!! Form::file('img') !!}
                  </div>
                </div>

                {!! Form::hidden('foto', null, array('id'=>'foto' ,'class'=>'form-control','style'=> 'color: #111;')) !!}

            </div>
          </div>
          <div class="modal-footer">
              {!! Form::submit('Aceptar', ['class' => 'btn btn-success']) !!}

              {!! Form::close() !!}
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
      </div>
  </div>
</div>