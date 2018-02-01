@extends('layouts.app')

@section("content")
    <div class="big-padding text-center blue-grey white-text">
        <h1>Clientes</h1>
    </div>
    <div class="container white">
        <table class="table table-bordered">
            <thead>
                <td>ID</td>
                <td>Name</td>
                <td>Esquema</td>
                <td>Date of Birthday</td>
                <td>RFC</td>
                <td>Curp</td>
                <td>Acciones</td>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->schema}}</td>
                        <td>{{$customer->dob}}</td>
                        <td>{{$customer->rfc}}</td>
                        <td>{{$customer->curp}}</td>
                        <td>
                            <a href="{{url('/customers/'.$customer->id.'/edit')}}">Modificar</a>
                            @include('customers.delete')

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<div class="floating">
    <a href="{{url('/customers/create')}}" class="btn btn-primary btn-fab">
        <i class="material-icons">add</i>
    </a>
</div>
@endsection