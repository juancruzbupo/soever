	<div class="form-group">
		{!!	Form::label('titulo', 'Titulo', array('class'=>'col-sm-2 control-label')) !!}
		<div class="col-sm-6">
			{!!	Form::text('titulo', null, array('class'=>'form-control')) !!}
			{!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
		</div>
	</div>

	<div class="form-group">
		{!!	Form::label('sub_texto', 'Descripsión', array('class'=>'col-sm-2 control-label')) !!}
		<div class="col-sm-6">
			{!!	Form::textarea('sub_texto', null, array('class'=>'form-control ckeditor', 'cols'=>'10', 'rows'=>'3')) !!}
			{!! $errors->first('sub_texto', '<p class="help-block">:message</p>') !!}
		</div>
	</div>

	<div class="form-group">
		{!!	Form::label('img', 'Imagen', array('class'=>'col-sm-2 control-label')) !!}
		<div id="botonera" class="col-sm-4">
			{!!	Form::file('img') !!}
			{!! $errors->first('img', '<p class="help-block">:message</p>') !!}
			<div id="marcoVistaPrevia">
				{!!	Form::label('vistaPrevia', 'Vista Previa', array('class'=>'control-label')) !!}
                <img id="vistaPrevia" width="100%" height="100%" src="" alt=""/>
            </div>
		</div>
	</div>

	<div class="form-group">
		{!!	Form::label('texto', 'Texto', array('class'=>'col-sm-2 control-label')) !!}
		<div class="col-sm-6">
			{!!	Form::textarea('texto', null, array('class'=>'form-control ckeditor', 'cols'=>'10', 'rows'=>'50')) !!}
			{!! $errors->first('texto', '<p class="help-block">:message</p>') !!}
		</div>
	</div>

	<br>

	<div class="form-group" >
	    <div class="col-sm-offset-1 col-sm-4" align="left">
	    {!! Form::submit('Cargar', ['class' => 'btn btn-primary']) !!}
	    </div>
	</div>