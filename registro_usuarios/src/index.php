<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Registro de Usuários</title>
</head>
<body>
    <div class="container text-center">
        <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h1 class="m-5">Cadastro</h1></div>
        </div>    
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form class="row gy-2 gx-3 align-items-center" action="Controllers/IndexRouter.php" method="POST">
                    Nome: <input type="text" name="nome" class="form-control"><br><br>
                    Email: <input type="email" name="email" class="form-control"><br><br>
                    Data de Nascimento: <input type="date" name="data_nascimento" class="form-control"><br><br>
                    <button class="btn btn-success mt-5" type="submit">Registrar</button>
                </form>
                <a class="btn btn-primary m-2 text-center" href="listar.php">Ver todos os usuários</a>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
