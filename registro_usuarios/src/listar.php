<?php
require __DIR__.'/Controllers/ListarRouter.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>listar</title>
</head>
<body>

<div class="container text-center">
    <a href="index.php" class="btn btn-primary mt-5">Voltar ao Cadastro</a>
    <table class="table mt-5 table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data de nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($data as $key => $value) {
                echo                
                "<tr>
                    <td>". $value['nome'] ."</td>
                    <td>". $value['email'] ."</td>
                    <td>".date("d-m-Y", strtotime($value['data_nascimento']))."</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>