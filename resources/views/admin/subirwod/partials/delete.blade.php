{!! Form::open(['route'=>['admin.subirwod.destroy',$subirwod], 'method'=>'DELETE'])!!}
<button type="submit" class="btn btn-danger" onclick="return confirm('seguro desea eliminar??')" >Eliminar WOD</button>
{!!Form::close() !!}
