{!! Form::open(['url' => $url,'method' => $method]) !!}
<div class="form-group">
    {{ Form::text('name',$customer->name,['class' => 'form-control' , 'placeholder' => 'Titulo...']) }}
</div>
<div class="form-group">
    {{ Form::text('esquema',$customer->schema,['class' => 'form-control' , 'placeholder' => 'Esquema...']) }}
</div>
<div class="form-group">
    {{ Form::text('rfc',$customer->rfc,['class' => 'form-control' , 'placeholder' => 'RFC...']) }}
</div>
<div class="form-group">
    {{ Form::text('curp',$customer->curp,['class' => 'form-control' , 'placeholder' => 'CURP...']) }}
</div>
<div class="form-group">
    {{ Form::date('dob', $customer->dob,['class' => 'form-control' , 'placeholder' => 'Fecha de nacimiento...']) }}
</div>
<div class="form-group right-text">
    <a href="{{url('/customers')}}"> Regresar a la lista</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}