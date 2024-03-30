@vite(['resources/sass/_seccionado.scss'])
<div class="seccionado">
    <div>
        <p class="tituloseccion">Seccion</p>
        <hr class="linea">
    </div>
    <div class="Notas" style="display: flex">
        <div class="NotaIdividual">
            <div class="foto">
                {{-- aqui va una foto --}}
            </div>
            <div class="titulonota">
                {{-- aqui va el titulo de la nota --}}
                <a href="{{route('noticia')}}">Titulo</a>
            </div>
        </div>
        <div class="NotaIdividual" >
            <div class="foto">
            {{-- aqui va una foto --}}
            </div>
            <div class="titulonota">
                {{-- aqui va el titulo de la nota --}}
                <a href="{{route('noticia')}}">Titulo</a>
            </div>
        </div>
        <div class="NotaIdividual">
            <div class="foto">
                {{-- aqui va una foto --}}
            </div>
            <div class="titulonota">
                {{-- aqui va el titulo de la nota --}}
                <a href="{{route('noticia')}}">Titulo</a>
            </div>
        </div>
    </div>
</div>