@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@extends('layouts.index')

@section('content')

        @vite(['resources/sass/_secdeldia.scss'])
<div class="secdeldia">
    <div class="Nota-principal">
        <div class="foto-principal">
        <img :src=" {{ $notas->first()->imagen }}" alt="Noticia del día">
        </div>
        <h3 class="Titulo-principal">
            <a :href="'/home/' + notas.idnoticia">{{ $notas->titulo }}</a>
        </h3>
    </div>
    <div class="par-principal">
        <div>
            <div class="foto-secundaria">

            </div>
            <div class="Titulo-secundario">
                <a :href="'/noticia/' + noticia.idnoticia">{{ $notas->titulo }}</a>
            </div>
        </div><div class="secdeldia">
    <div class="Nota-principal">
        <div class="foto-principal">
            <img src="{{ $notas->first()->imagen }}" alt="Noticia del día">
        </div>
        <h3 class="Titulo-principal">
            <a href="/home/{{ $notas->first()->idnoticia }}">{{ $notas->first()->titulo }}</a>
        </h3>
    </div>
    <div class="par-principal">
        @foreach($notas->skip(1) as $notas)
        <div>
            <div class="foto-secundaria">
                <!-- Aquí puedes mostrar la imagen secundaria si la tienes en tu modelo -->
            </div>
            <div class="Titulo-secundario">
                <a href="/home/{{ $notas->idnoticia }}">{{ $notas->titulo }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

        <div>
            <div class="foto-secundaria">

            </div>
            <div class="Titulo-secundario">
                <a :href="'/noticia/' + $notas->idnoticia ">{{ $notas->titulo }}</a>
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

@vite(['resources/sass/_seccionado.scss'])
<div class="seccionado">
    <div>
        <p class="tituloseccion">Seccion</p>
        <hr class="linea">
    </div>
    <div class="seccionado-contenedor">
        <div class="seccionado-nota">
            <div class="seccionado-imagen">

            </div>
            <div class="seccionado-titulo">
                <a href="{{route('nota')}}">{{ $notas->titulo }}</a>
            </div>
        </div>
        <div class="seccionado-nota">
            <div class="seccionado-imagen">

            </div>
            <div class="seccionado-titulo">
                <a href="{{route('nota')}}">{{ $notas->titulo }}</a>
            </div>
        </div>
        <div class="seccionado-nota">
            <div class="seccionado-imagen">

            </div>
            <div class="seccionado-titulo">
                <a href="{{route('nota')}}">{{ $notas->titulo }}</a>
            </div>
        </div>
    </div>
</div>

