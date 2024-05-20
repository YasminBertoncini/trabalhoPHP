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
    

    
        <form action="confirmarPedido.php" method="post">
        <div class="m-3">
            <div class="col-6">
                <label  for="pizzas" class="form-label lead">Escolha o sabor da sua pizza</label>
                <select name="sabor" class="form-select"  >
                 <option selected>Sabores</option>
                    <option value="frango">Frango e bacon</option>
                    <option value="calabresa">Calabresa</option>
                    <option value="portuguesa">Portuguesa</option>
                    <option value="chocolate">Chocolate</option>
                </select>
            </div>

            <div class="col-6 m-3">
                <p class="lead">Escolha o tamanho da pizza</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tamanho" id="4" value="4">
                 <label class="form-check-label" for="4">4 pedaços</label>
            </div>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="tamanho" id="8" value="8" >
             <label class="form-check-label" for="8">8 pedaços</label>
            </div>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="tamanho" id="12" value="12">
             <label class="form-check-label" for="12">12 pedaços</label>
            </div>
                

            <div class="col-6 m-3">
                <p class="lead">Escolha a sua bebida</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bebida" id="coca"  value="Coca-Cola">
                 <label class="form-check-label" for="coca">Coca-Cola</label>
            </div>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="bebida" id="guarana" value="Guarana" >
             <label class="form-check-label" for="guarana">Guaraná</label>
            </div>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="bebida" id="fanta" value="Fanta">
             <label class="form-check-label" for="fanta">Fanta</label>
            </div>

           
            </div>
                
            </div>

            <input type="submit" value="Fazer pedido" class="btn btn-outline-danger">

            
        </form>

    </div>



    
</body>
</html>




