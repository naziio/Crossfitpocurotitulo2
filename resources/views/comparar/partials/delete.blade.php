{!! Form::open(['route'=>['admin.noticia.destroy',$noticia], 'method'=>'DELETE'])!!}
<button type="submit" class="btn btn-danger" onclick="return confirm('seguro desea eliminar??')" >Eliminar noticia</button>
{!!Form::close() !!}
