


<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Tarefa</th>
            <th>data limite conclusão</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($tarefas as $key => $tarefa)
            <tr>
                <td>{{$tarefa->id}}</td>
                <td>{{$tarefa->tarefa}}</td>
                <td>{{date('d/m/Y' ,strtotime($tarefa->data_limite_conclusao))}}</td>
            </tr>
        @endforeach
        
    </tbody>
</table>