@extends('layouts.master')

@section('content')

Editar producto
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Editar producto
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('productos/edit/' . $productos->id) }}" method="POST">
                        {{method_field('PUT')}}
                        @csrf

                        <div class="form-group">
                            <label for="title">Nombre</label>
                            <input type="text" name="nombre" value="{{ $productos->nombre }}" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="number"  name="precio" value="{{ $productos->precio }}" placeholder="Precio">
                        </div>

                        <div class="form-group">
                            <input type="text" name="categoria" value="{{ $productos->categoria }}" placeholder="Categoria">
                        </div>

                        <div class="form-group">
                            <input type="text" name="imagen" placeholder="Imagen">
                        </div>

                       

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir película
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop