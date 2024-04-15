@vite(['resources/sass/_secdeldia.scss'])
<div class="secdeldia">
    <div class="Nota-principal">
        <div class="foto-principal">
        <img src="{{ $notas->first()->imagen }}" alt="">
        </div>
        <h3 class="Titulo-principal">
            <a href="/home/{{ $notas->first()->idnoticia }}">{{ $notas->first()->titulo }}</a>
        </h3>
    </div>
    <div class="par-principal">
       @php
    $notasSlice = $notas->slice(1);
@endphp

@foreach ($notasSlice->take(2) as $notas)
    <div>
        <div class="foto-secundaria">
        <img src="{{ $notas->imagen }}" alt="">
        </div>
        <div class="Titulo-secundario">
            <a href="/home/{{ $notas->idnoticia }}">{{ $notas->titulo }}</a>
        </div>
    </div>

</div>
@endforeach




{{-- <div style="width: 600px; height: 350px; border: 1px solid black;">
    <div>
         <h1>imagen</h1>
        <img src="" alt="">
    </div>
    <div>
        <h3>
            titulo
        </h3>
    </div>
</div>   --}}