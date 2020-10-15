<h1> tarefas para hoje</h1>
<ul>
    @foreach($tarefas as $tarefas)
        <li>{{$tarefas}}</li>
    @endforeach
</ul>