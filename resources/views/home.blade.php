@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@extends('layouts.index')

@section('content')
 
    @component('components.SecDelDia') @endcomponent

    {{-- <div style="display: flex;"> --}}
        @component('components.line')@endcomponent
        @component('components.NotaMue')@endcomponent
        {{-- @component('components.NotaMue')@endcomponent
        @component('components.NotaMue')@endcomponent --}}
    </div>
    <div>
        @component('components.Seccionado')@endcomponent
        @component('components.Seccionado')@endcomponent
    </div>
    <div>
        @component('components.LoMasVisto')@endcomponent
    </div>
    <div>
        @component('components.Seccionado')@endcomponent
        @component('components.Seccionado')@endcomponent
    </div>

@endsection


