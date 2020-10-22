<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1 style="color: green"> @yield("header")</h1>
        @yield('conteudo')
        <div class="meu-rodape">
            <h2> Opçoes de navegação</h2>
            <a href="{{route('equipas.index')}}">Inicio</a>
            <br>
            <a href="{{route('equipas.lista')}}">Equipas</a>
        </div>
    </body>
</html>