@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@extends('layouts.index')
@section('content')
    <h1>leer la nota</h1>
    @component('components.noticiaC')@endcomponent
    @component('components.notamue')@endcomponent
@endsection
