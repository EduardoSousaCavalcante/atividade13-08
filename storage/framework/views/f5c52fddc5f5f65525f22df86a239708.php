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
                <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($aluno->id); ?></td>
                        <td><?php echo e($aluno->nome); ?></td>
                        <td><?php echo e($aluno->telefone); ?></td>
                        <td><?php echo e($aluno->email); ?></td>
                        <td><?php echo e($aluno->motivo_contato); ?></td>
                        <td><?php echo e($aluno->mensagem); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/cavalcante/resources/views/welcome.blade.php ENDPATH**/ ?>