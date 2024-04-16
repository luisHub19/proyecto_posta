@vite(['resources/sass/_noticiaC.scss'])
<div class="noticiaC" style="display: flex">
<div class="noticia">
        <div class="imagenC">
            <img src="{{ $notas->imagen }}">
        </div>
        <div class="descripcion">
            <h2>{{ $notas->titulo }}</h2>
            <p>{{ $notas->descripcion }}</p>
            <p>{{ $notas->autor }}</p>
        </div>
    </div>
</div>