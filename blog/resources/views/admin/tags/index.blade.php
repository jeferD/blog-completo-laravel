@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listar Tags</h1>
@stop

@section('content')
    {{-- existe un mensaje de sesion que se envia desde controlador, esto lo hace con with --}}
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>    
    @endif
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm" href="{{route('admin.tags.create')}}">Crear Tag</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    {{-- tags es el que llega por medio del controlador --}}
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td> 
                            <td width='10px' ><a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('admin.tags.destroy',$tag )}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

