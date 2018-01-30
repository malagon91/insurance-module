@extends('layouts.app')

@section("content")
<div class="container white">
    <h1>Nuevo Cliente</h1>
    <!-- Include Form --!>
    @include('customers.form', ['customer' => $customer , 'url' => '/customers','method' => 'POST'])
</div>

@endsection