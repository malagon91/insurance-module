@extends('layouts.app')

@section("content")
    <div class="container white">
        <h1>Nuevo Seguro de autos</h1>

        @include('cars.form', ['car' => $car , 'url' => '/cars','method' => 'POST','customers' =>$customers])

    </div>

@endsection