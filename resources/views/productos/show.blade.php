@extends('layouts.master')

@section('content')
<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random"  class="img-fluid"/>

    </div>
    <div class="col-sm-8">

    <p>  {{$arrayProductos->nombre}}</p>
        {{$arrayProductos->categoria}}</p>

        <p><strong>Estado: </strong>
            @if($arrayProductos->pendiente)
                Producto no disponible
                @php
                $class = "btn btn-danger";
                $texto = "Devolver";
                @endphp
            @else
                Producto disponible
                @php
                    $class = "btn btn-success";
                    $texto = "Adquirir";
                @endphp
            @endif
        </p>
        <form action="{{ url('productos/changeRented/' . $arrayProductos->id) }}" method="POST">
            {{ method_field('PUT') }}
            @csrf
            <input type="submit"  class="{{$class}}" value="{{$texto}}" />
        </form>


        <a class="btn btn-warning" href="{{ url('/productos/edit/' . $arrayProductos->id ) }}">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Editar Producto</a>
        <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>
    </div>
</div>

@stop