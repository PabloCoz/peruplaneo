@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios Contactados</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Peso</th>
                    <th>Talla</th>
                    <th>Edad</th>
                    <th>Tipo de ejercicio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                    <tr>
                        <td>{{$plan->name}}</td>
                        <td>{{$plan->lastname}}</td>
                        <td>{{$plan->email}}</td>
                        <td>{{$plan->weight	}}</td>
                        <td>{{$plan->height}}</td>
                        <td>{{$plan->age}}</td>
                        <td>{{$plan->type}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{-- {{$clients->links('vendor.pagination.bootstrap-4')}} --}}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop