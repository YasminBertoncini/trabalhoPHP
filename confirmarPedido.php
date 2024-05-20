<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema de Lanchonete</title>
</head>
<body class="bg-warning-subtle">

    
        <?php include 'navbar.php';
        require 'conectaBanco.php';
        
       ?>
        
    

    <div class="container ">
        <h2>Clientes Cadastrados</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Email:</th>
                    <th>CPF:</th>
                    <th>Endereço:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $sql = "SELECT * FROM cadastro";
                $resultado = $banco->query($sql);

                
                while($linha = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td>" . $linha['cpf'] . "</td>";
                    echo "<td>" . $linha['endereco'] . "</td>";
                    echo "</tr>";
                }

                $banco->close();

                include 'cadastrarPedido.php'

                            
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
