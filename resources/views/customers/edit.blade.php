@extends('layouts.app')

@section("content")
    <div class="container white">
        <h1>Editar Cliente</h1>
        @include('customers.form', ['customer' => $customer , 'url' => '/customers/'.$customer->id,'method' => 'PATCH'])
    </div>

@endsection