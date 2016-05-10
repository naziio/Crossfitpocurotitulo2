<div><div class="form-group">
    {!! Form::Label('nombre', 'Nombre WOD:') !!}
    {!! Form::select('nombre', $data, $selected,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('peso', 'Peso') !!} ejemplo: 14 ( no es necesario poner medida)
    {!! Form::text('peso',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tiempo', 'Tiempo') !!} ejemplo: 00:14:35
    {!! Form::text('tiempo',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fecha', 'Fecha') !!} escoger fecha de realizacion
    {!! Form::date('fecha',null, ['class'=>'form-control']) !!}
</div>

</div>
