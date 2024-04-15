@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@vite(['resources/sass/_seccionado-home.scss'])
@extends('layouts.index')

@section('content')
 
        @component('components.SecDelDia') @endcomponent
    <div>
        @component('components.NotaMue')@endcomponent
    </div>
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


