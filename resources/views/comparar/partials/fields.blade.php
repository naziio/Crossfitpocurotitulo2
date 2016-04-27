<div><div class="form-group">
        {!! Form::Label('name1', 'Nombre :') !!}
        {!! Form::select('id', $data, $selected,['class' => 'form-control']) !!}
    </div>
    CON:
    <div class="form-group">
        {!! Form::Label('name2', 'Nombre :') !!}
        {!! Form::select('id2', $data2, $selected,['class' => 'form-control']) !!}
    </div>

</div>