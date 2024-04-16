@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@vite(['resources/sass/_seccionado-home.scss'])
@extends('layouts.index')
$notas = App\Models\Noticia::orderBy('created_at', 'desc')->take(3)->get();
@section('content')
 
@component('components.SecDelDia', ['notas' => $notas])
@endcomponent
<div>
        @component('components.NotaMue', ['notas' => $notas])
        @endcomponent
    </div>
    <div>
        @component('components.Secciones.Seccionado', ['notas' => $notas])@endcomponent
    </div>
    <div>
        @component('components.Secciones.Seccionado2', ['notas' => $notas])@endcomponent
    </div>
    <div>
        @component('components.Secciones.Seccionado3', ['notas' => $notas])@endcomponent
    </div>
    <div>
        @component('components.Secciones.Seccionado4', ['notas' => $notas])@endcomponent
    </div>
    <div>
        @component('components.Secciones.Seccionado5', ['notas' => $notas])@endcomponent
    </div>
    <div>
        @component('components.Secciones.Seccionado6', ['notas' => $notas])@endcomponent
    </div>
</div>

@endsection