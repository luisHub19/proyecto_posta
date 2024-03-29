{{-- aqui va el contenido que se repite en todas las views --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>posta</title>
</head>
<body>
    @include('layouts._partials.nav')
    @yield('content') 
</body>
    @include('layouts._partials.footer')
</html>
