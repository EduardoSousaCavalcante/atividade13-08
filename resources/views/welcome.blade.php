<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        /* Centraliza horizontal e verticalmente */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* altura total da viewport */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 90%;
            max-width: 800px;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h3 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Lista de Alunos</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Motivo do Contato</th>
                    <th>Mensagem</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->id }}</td>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->telefone }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>{{ $aluno->motivo_contato }}</td>
                        <td>{{ $aluno->mensagem }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
