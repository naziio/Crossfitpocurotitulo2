{!! Form::open(['route'=>['wodfijo.destroy',$wodfijo], 'method'=>'DELETE'])!!}
<button type="submit" class="btn btn-danger" onclick="return confirm('seguro desea eliminar??')" >Eliminar WOD</button>
{!!Form::close() !!}
