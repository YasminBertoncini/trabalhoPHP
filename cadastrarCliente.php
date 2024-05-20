<?php
    
    require 'conectaBanco.php';
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    if(empty($nome)){
        echo "<p>Nome deve ser preenchido </p>";
    }elseif(empty($cpf)){
        echo "<p>CPF deve ser preenchido </p>";
    }else{
        
        $sql = "INSERT INTO cadastro(nome, cpf, endereco, email) VALUES 
                                        ('$nome','$cpf', '$endereco', '$email')";
        $banco->query($sql); 
        if($banco->affected_rows >= 1){
            echo "<p>Cliente $nome cadastrado com sucesso!</p>";
        }else{
            echo "Erro ao cadastrar o cliente $nome no banco de dados!";
        }
    }

    $banco->close();
?>