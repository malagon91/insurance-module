@extends('layouts.app')

@section("content")
    <div class="big-padding text-center blue-grey white-text">
        <h1>Seguros de Autos</h1>
    </div>
    <div class="container white">
        <table class="table table-bordered">
            <thead>
            <td>ID</td>
            <td>Customer</td>
            <td>Compañia</td>
            <td>Numero de Serie</td>
            <td>Tipo de Auto (Año y Modelo)</td>
            <td>Poliza</td>
            <td>Fecha de Emision</td>
            <td>Fecha Final</td>
            <td>Forma de Pago</td>
            <td>Acciones</td>
            </thead>
            <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td>{{$car->id}}</td>
                        <td>{{$car->customer->name}}</td>
                        <td>{{$car->company}}</td>
                        <td>{{$car->serial_number}}</td>
                        <td>{{$car->description}}</td>
                        <td>{{$car->policy}}</td>
                        <td>{{$car->doi}}</td>
                        <td>{{$car->doe}}</td>
                        <td>{{$car->wtp}}</td>
                        <td>
                            <a href="{{url('/cars/'.$car->id.'/edit')}}">Modificar</a>
                            @include('cars.delete')

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="floating">
        <a href="{{url('/cars/create')}}" class="btn btn-primary btn-fab">
            <i class="material-icons">add</i>
        </a>
    </div>
@endsection