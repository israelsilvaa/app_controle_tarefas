<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <style>
        .titulo{
            border:1px;
            background-color: #c2c2c2;
            text-align: center;
            whidth: 100%;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .tabela{
            width: 100%;
        }

        table th{
            text-align: left;
        }

        .page-breack{
            page-break-after: always; 
        }

    </style>
</head>

<body>
    <div class="titulo">Lista de tarefas</div>
    <table class="tabela">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tarefa</th>
                <th>data limite conclusão</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($tarefas as $key => $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->tarefa }}</td>
                    <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="page-breack"></div>
    <h2>pagina 2</h2>
</body>

</html>
