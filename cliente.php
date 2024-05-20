<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema de Lanchonete</title>
</head>
<body class="bg-warning-subtle">

    
    <?php include 'navbar.php';?>
    

    <form action="cadastrarCliente.php" method="post">
                    <div class="m-3 col-6">
                        <label class="form-label" for="nome">Nome:</label>
                        <input class="form-control" type="text" name="nome" id="nome" required>
                    </div>
                    <div class="m-3 col-6">
                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email" >
                    </div>
                    <div class="m-3 col-6">
                        <label class="form-label" for="cpf">CPF:</label>
                        <input class="form-control" type="number" name="cpf" id="cpf"required>
                    </div>
                    <div class="m-3 col-6">
                        <label class="form-label" for="endereco">Endereço</label>
                        <input class="form-control" type="text" name="endereco" id="endereco">
                    </div>
                    
                    <button class="btn btn-danger m-3" type="submit">Cadastrar</button>
                </form>


    
</body>
</html>

