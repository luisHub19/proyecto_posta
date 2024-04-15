@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@vite(['resources/sass/_seccionado-home.scss'])
@extends('layouts.index')

@section('content')
 
@component('components.SecDelDia', ['notas' => $notas])
@endcomponent
    <div>
    </div>
   
@endsection