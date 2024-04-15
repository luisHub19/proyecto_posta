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
        <div class="par-principal">
                @foreach ($notasSlice->take(2) as $notas)
            <div>
                <div class="foto-secundaria">
                    <img src="{{ $notas->imagen }}" alt="">
                </div>
                <div class="Titulo-secundario">
                      <a href="/home/{{ $notas->idnoticia }}">{{ $notas->titulo }}</a>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</div>