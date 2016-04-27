{!! Form::open(['route'=>['admin.woddiario.destroy',$woddiario], 'method'=>'DELETE'])!!}
<button type="submit" class="btn btn-danger" onclick="return confirm('seguro desea eliminar??')" >Eliminar WOD</button>
{!!Form::close() !!}
