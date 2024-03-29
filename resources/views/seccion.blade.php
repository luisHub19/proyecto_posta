@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@extends('layouts.index')


@section('content')
    @component('components.line')@endcomponent
    @component('components.NotaMue')@endcomponent
    @component('components.NotaMue')@endcomponent
    @component('components.NotaMue')@endcomponent
    @component('components.NotaMue')@endcomponent
    @component('components.NotaMue')@endcomponent
@endsection
