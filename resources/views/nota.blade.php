@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@vite(['resources/sass/_seccionado-home.scss'])
@extends('layouts.index')
@section('content')
@vite(['resources/sass/_noticiaC.scss'])
@vite(['resources/sass/_secdeldia.scss'])
<div class="secdeldia">
    <div class="Nota-principal">
        <div class="foto-principal">
        {{ $notas->imagen }}
        </div>
        <h3 class="Titulo-principal">
            <a href="{{route('nota')}}">{{ $notas->titulo }}</a>
        </h3>
    </div>
    <div class="par-principal">
        <div>
            <div class="foto-secundaria">

            </div>
            <div class="Titulo-secundario">
                <a href="{{route('nota')}}">{{ $notas->titulo }}</a>
            </div>
        </div>
        <div>
            <div class="foto-secundaria">

            </div>
            <div class="Titulo-secundario">
                <a href="{{route('nota')}}">{{ $notas->titulo }}</a>
            </div>
        </div>
    </div>
</div>



@vite(['resources/sass/_notamuestra.scss'])
<div >
    <hr class="lineamuestra">
    <h1 class="muestraseccionado">
        <i class="bi bi-clock"></i>
        Lo mas reciente en Durango
    </h1>
</div>
<div class="masreciente-contenedor">
    <div class="masreciente-individual">
        <div class="masreciente-imagen">
        <img src="{{ $notas->imagen }}">
        </div>
        <div class="masreciente-texto">
            <div class="masreciente-titulo">
                <a href="{{ $notas->titulo }}">{{ $notas->titulo }}</a>
            </div>
            <div class="masreciente-descripcion">
                <p>{{ $notas->descripcion }}</p>
            </div>
        </div>
    </div>

    <div class="masreciente-individual">
        <div class="masreciente-imagen">
        <img src="{{ $notas->imagen }}">
        </div>
        <div class="masreciente-texto">
            <div class="masreciente-titulo">
                <a href="{{$notas->imagen}}">{{ $notas->titulo }}</a>
            </div>
            <div class="masreciente-descripcion">
                <p>{{ $notas->descripcion }}</p>
            </div>
        </div>
    </div>

    <div class="masreciente-individual">
        <div class="masreciente-imagen">
        <img src="{{ $notas->imagen }}">
        </div>
        <div class="masreciente-texto">
            <div class="masreciente-titulo">
                <a href="{{$notas->imagen}}">{{ $notas->titulo }}</a>
            </div>
            <div class="masreciente-descripcion">
                <p>{{ $notas->descripcion }}</p>
            </div>
        </div>
    </div>
</div>
