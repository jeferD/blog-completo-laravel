@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listar Categoria</h1>
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
            <a class="btn btn-primary btn-sm" href="{{route('admin.categories.create')}}">Crear Categoría</a>
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td> 
                            <td width='10px' ><a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('admin.categories.destroy',$category )}}" method="POST">
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

