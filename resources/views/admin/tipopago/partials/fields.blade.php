

<div class="form-group">
    {!! Form::label('type', 'Tipo de pago') !!}
    {!! Form::text('type',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('monto', 'Monto') !!} monto a pagar, en pesos chilenos.
    {!! Form::date('monto',null, ['class'=>'form-control']) !!}
</div>



