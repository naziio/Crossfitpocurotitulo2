{!! Form::open(['route'=>['admin.pago.destroy',$pago], 'method'=>'DELETE'])!!}
<button type="submit" class="btn btn-danger" onclick="return confirm('seguro desea eliminar??')" >Eliminar pago</button>
{!!Form::close() !!}
