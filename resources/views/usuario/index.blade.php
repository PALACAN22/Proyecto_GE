@extends('layouts.app')
@section('content')
<div class="container">

<!-- <div class="alert alert-success alert-dismissible" role="alert"> -->
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif
<!-- 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

</div> -->

<a href="{{ url('usuario/create') }}" class="btn btn-success">Registrar nuevo Usuario</a>
<br/>
<br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>

            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$usuario->Foto }}" width="100" alt="">
            </td>
            <td>{{ $usuario->PrimerNombre }}</td>
            <td>{{ $usuario->SegundoNombre }}</td>
            <td>{{ $usuario->PrimerApellido }}</td>
            <td>{{ $usuario->SegundoApellido }}</td>
            <td>{{ $usuario->Correo }}</td>
            <td> 
                
                <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-warning">
                    Editar
                </a>

                |

                <form action="{{ url('/usuario/'.$usuario->id) }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" class="btn btn-danger">
                </form>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection