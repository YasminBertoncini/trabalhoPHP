<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sabor = $_POST['sabor'];
    $tamanho = $_POST['tamanho'];
    $bebida = $_POST['bebida'];

    
    echo "Você escolheu uma pizza de sabor $sabor com tamanho $tamanho e a bebida $bebida.";
}
?>
