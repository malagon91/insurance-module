{!! Form::open(['url' => $url,'method' => $method]) !!}
<div class="form-group">
    {{ Form::text('company',$car->company,['class' => 'form-control' , 'placeholder' => 'Titulo...']) }}
</div>
<div class="form-group">
    {{ Form::text('customer_id',$customers,['class' => 'form-control' , 'placeholder' => 'Customer...']) }}
</div>
<div class="form-group">
    {{ Form::text('serial_number',$car->serial_number,['class' => 'form-control' , 'placeholder' => 'Numero de serie...']) }}
</div>
<div class="form-group">
    {{ Form::text('description',$car->description,['class' => 'form-control' , 'placeholder' => 'Tipo de Auto...']) }}
</div>
<div class="form-group">
    {{ Form::text('policy',$car->policy,['class' => 'form-control' , 'placeholder' => 'Poliza...']) }}
</div>
<div class="form-group">
    {{ Form::date('doi', $car->doi,['class' => 'form-control' , 'placeholder' => 'Fecha de emision...']) }}
</div>
<div class="form-group">
    {{ Form::date('doe', $car->doe,['class' => 'form-control' , 'placeholder' => 'Fecha final...']) }}
</div>
<div class="form-group">
    {{ Form::text('wtp',$car->wtp,['class' => 'form-control' , 'placeholder' => 'Forma de Pago...']) }}
</div>
<div class="form-group right-text">
    <a href="{{url('/cars')}}"> Ver seguros de carros</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}