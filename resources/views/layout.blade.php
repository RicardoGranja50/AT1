<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body>
        <h1 style="color: red"> @yield("header")</h1>
        @yield('conteudo')
        <div class="meu-rodape">
            <h2> Opçoes de navegação</h2>
            <i class="fab fa-wolf-pack-battalion"></i>
            <a href="{{route('equipas.index')}}">Inicio</a>
            <br>
            <i class="fab fa-wolf-pack-battalion"></i>
            <a href="{{route('equipas.lista')}}">Equipas</a>
            <br>
            <i class="fab fa-wolf-pack-battalion"></i>
            <a href="{{route('contacto.index')}}">Contacto</a>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>