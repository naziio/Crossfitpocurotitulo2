{!! Form::open(['route'=>['admin.pago.destroy',$wodfijo], 'method'=>'DELETE'])!!}
<button type="submit" class="btn btn-danger" onclick="return confirm('seguro desea eliminar??')" >Eliminar pago</button>
{!!Form::close() !!}
