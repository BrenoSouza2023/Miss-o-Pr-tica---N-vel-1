<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];  
    $cep = $_POST ["cep"];
    $rua = $_POST ["rua"];
    $numero = $_POST ["numero"];
    $complemento = $_POST ["complemento"];
    $cidade = $_POST["cidade"];
    $uf = $_POST ["uf"];

    $destinatario = "202302519521@alunos.estacio.br";
    $assunto = "Formulario Etapa1";
    mail($destinatario, $assunto);
    
    header("Location: home.html");
    exit();
} else {
    
    header("Location: erro.html");
    exit();
}
?>