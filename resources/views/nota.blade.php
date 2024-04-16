@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@extends('layouts.index')
@section('content')
    @component('components.noticiaC', ['notas' => $notas])@endcomponent
@endsection