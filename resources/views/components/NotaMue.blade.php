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
            <p>imagen</p>
        </div>
        <div class="masreciente-texto">
            <div class="masreciente-titulo">
                <a href="{{ $notas->titulo }}">Titulo</a>
            </div>
            <div class="masreciente-descripcion">
                <p>{{ $notas->descripcion }}</p>
            </div>
        </div>
    </div>

    <div class="masreciente-individual">
        <div class="masreciente-imagen">
            <p>imagen</p>
        </div>
        <div class="masreciente-texto">
            <div class="masreciente-titulo">
                <a href="{{$notas->imagen}}">Titulo</a>
            </div>
            <div class="masreciente-descripcion">
                <p>{{ $notas->descripcion }}</p>
            </div>
        </div>
    </div>

    <div class="masreciente-individual">
        <div class="masreciente-imagen">
            <p>imagen</p>
        </div>
        <div class="masreciente-texto">
            <div class="masreciente-titulo">
                <a href="{{$notas->imagen}}">Titulo</a>
            </div>
            <div class="masreciente-descripcion">
                <p>{{ $notas->descripcion }}</p>
            </div>
        </div>
    </div>
</div>
