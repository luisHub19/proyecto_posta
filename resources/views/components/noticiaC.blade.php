@vite(['resources/sass/_noticiaC.scss'])
<div class="noticiaC" style="display: flex">
<div class="noticia">
        <div class="imagenC">
            <img src="{{ $notas->imagen }}">
        </div>
        <div class="descripcion">
            <h2>{{ $notas->titulo }}</h2>
            <p>{{ $notas->descripcion }}</p>
            <p>{{ $nota->autor }}</p>
        </div>
    </div>
    <div class="mas">
        <!-- Aquí puedes agregar contenido adicional si es necesario -->
    </div>
</div>
