@extends('layouts.app')

@section("content")
    <div class="container white">
        <h1>Editar seguro de autos</h1>
        @include('cars.form', ['customer' => $car , 'url' => '/cars/'.$car->id,'method' => 'PATCH'])
    </div>

@endsection