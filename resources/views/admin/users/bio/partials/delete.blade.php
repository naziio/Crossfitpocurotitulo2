{!! Form::open(['route'=>['bio.destroy',$bios], 'method'=>'DELETE'])!!}
<button type="submit" class="btn btn-danger" onclick="return confirm('seguro desea eliminar??')" >Eliminar biografia</button>
{!!Form::close() !!}
