<div class="form-group">
    {!! Form::Label('user_fk', 'Nombre Alumno:') !!}
    {!! Form::select('user_fk', $data1, $selected,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('tipopago_fk', 'ID Tipo de pago') !!}
    {!! Form::text('tipopago_fk', $data2 ,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fechaexpira', 'Fecha expira') !!} fecha de expiracion.
    {!! Form::date('fechaexpira',null, ['class'=>'form-control']) !!}
</div>


