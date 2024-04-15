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