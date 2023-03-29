@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear TAG</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>    
    @endif
    <div class="card">
        <div class="card-body"> 
            {{-- esta es sintaxis de laravel collection, que se instalo por medio de compouser --}}
            {!! Form::open(['route' => 'admin.tags.store']) !!}
                @include('admin.tags.partials.form')

                {{-- <div class="form-group">
                    <label for="">Color:</label>

                    <select name="color" id="" class="form-control">
                        <option value="red">Color rojo</option>
                        <option value="green">Color verde</option>
                        <option value="blue" selected>Color azul</option>

                    </select>
                </div> --}}

                {!! Form::submit('Crear Tag', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
