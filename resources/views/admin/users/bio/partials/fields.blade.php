<div class="form-group">
    {!! Form::label('peso', 'Peso') !!}
    {!! Form::text('peso',null,['class'=>'form-control'] )!!}
</div>
<div class="form-group">
    {!! Form::label('estatura', 'Estatura') !!}
    {!! Form::text('estatura',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('biografia', 'Biografia') !!}
    {!! Form::text('biografia',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('foto', 'foto') !!}
    {!! Form::file('path') !!}
</div>