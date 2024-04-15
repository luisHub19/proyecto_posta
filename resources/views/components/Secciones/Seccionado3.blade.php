@vite(['resources/sass/_seccionado.scss'])
<div class="seccionado">
    <div>
        <p class="tituloseccion">Seccion</p>
        <hr class="linea">
    </div>
    @php
    $notasSlice = $notas->slice(9);
    @endphp
    <div class="seccionado-contenedor">
    @foreach ($notasSlice->take(3) as $notas)
        <div class="seccionado-nota">
            <div class="seccionado-imagen">
                <img src="{{ $notas->imagen }}" alt="">
            </div>
            <div class="seccionado-titulo">
                <a href="/home/{{ $notas->idnoticia }}">{{ $notas->titulo }}</a>
            </div>
        </div>
    @endforeach
    </div>
</div>