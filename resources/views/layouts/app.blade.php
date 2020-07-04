<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="d-flex position-fixed w-100 bg-white py-3 shadow align-items-center" style="left: 0;">        
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <img src="{{ asset('img/ativo.png') }}" style="width: 225px; height: 50px;" alt="produto icone">                        
                <div>
                    <a href="{{ route('clientes.index') }}" class="h6 d-inline-block m-0 mr-5 font-weight-bold"> Clientes </a>
                    <a href="{{ route('produtos.index') }}" class="h6 d-inline-block m-0 font-weight-bold"> Produtos </a>
                </div>
                <div>
        
                </div>
            </div>
        </div>        
    </div>

    {{-- <a href="{{ route('produtos.create') }}" class="btn btn-primary">Adicionar produto</a> --}}
        <div style="width: 100%; min-height: 100vh;padding-top: 110px">                      
            <div class="container">
                @yield('content')
            </div>
        </div>    
</body>

</html>
