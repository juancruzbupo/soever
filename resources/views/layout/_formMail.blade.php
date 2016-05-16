<div class="form-group">
  {!! Form::label('email', '(*)' , array('class'=>'col-lg-2 control-label')) !!}
  <div class="col-lg-8">
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
  </div>
</div>

@if($errors->has('email'))
  <div class="form-group">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 alert alert-danger focus">
      <ul>
        <li>{{ $errors->first('email') }}</li>
      </ul>
    </div>
  </div>
@endif

<div class="form-group">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Telefono']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('asunto', '(*)', array('class'=>'col-lg-2 control-label')) !!}
  <div class="col-lg-8">
    {!! Form::text('asunto', null, ['class' => 'form-control', 'placeholder' => 'Asunto']) !!}
  </div>
</div>

@if($errors->has('asunto'))
  <div class="form-group">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 alert alert-danger focus">
      <ul>
        <li>{{ $errors->first('asunto') }}</li>
      </ul>
    </div>
  </div>
@endif

<div class="form-group">
  {!! Form::label('mensaje', '(*)', array('class'=>'col-lg-2 control-label')) !!}
  <div class="col-lg-8">
    {!! Form::textarea('mensaje', null, ['class' => 'form-control', 'placeholder' => 'Mensaje']) !!}
  </div>
</div>

@if($errors->has('mensaje'))
  <div class="form-group">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 alert alert-danger focus">
      <ul>
        <li>{{ $errors->first('mensaje') }}</li>
      </ul>
    </div>
  </div>
@endif

<div class="form-group" align="center">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success' ] ) !!}
</div>

<br>





      <!-- Contact Section
      <section id="contact" class="container content-section text-center">
         <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <h2>contacta conmigo</h2>
            <p>No dude en enviarme un correo electrónico para proporcionar alguna información, dar sugerencias para nuevas ideas y temas.<br>
               Los campos con (*) son obligatorios.</p>
          </div>

          <div class="col-lg-8 col-md-offset-2"   >
            {!! Form::open(array('action' => 'InicioController@sendMail', 'method' => 'post', 'class'=>'form-horizontal')) !!}

              @include('layout._formMail')

          {!! Form::close() !!}

          </div>

          <div class="col-lg-8 col-lg-offset-2">
            <ul class="list-inline banner-social-buttons">
              <li>
                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
              </li>
              <li>
                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
              </li>
            </ul>
          </div>
        </div>

      </section>-->