@extends('layouts.index')

@section('content')
    <h1>pagina principal posta</h1>

    @component('components.SecDelDia') @endcomponent

    <div style="display: flex;">
        @component('components.NotaMue')@endcomponent
        @component('components.NotaMue')@endcomponent
        @component('components.NotaMue')@endcomponent

    </div>
    
    

@endsection


{{-- <a href="{{route('secciones')}}">secciones</a>
    <a href="{{route('noticia')}}">notasgood</a>
    boton que da URL 
    <a href="{{route('seccion', ['seccion' => 'deportes'])}}">deportes</a> --}}