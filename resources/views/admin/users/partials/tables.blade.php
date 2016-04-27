<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Mail</th>
        <th>Acciones</th>
    </tr>
    @foreach( $users as $user)

    <tr>
        <th>{{$user->id}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->email}}</th>
        <th><a href="{{ route('admin.users.edit', $user) }}">Editar</a> <a href="">Eliminar</a></th>

    </tr>
    @endforeach
</table>