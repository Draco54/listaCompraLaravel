@extends('layouts.master')

@section('content')
<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random"  class="img-fluid"/>

    </div>
    <div class="col-sm-8">

    <p>  {{$arrayProductos[0]}}</p>
        {{$arrayProductos[1]}}</p>

    </div>
</div>

@stop