<?php
include 'conexao.php';

    $nome = $_POST['nomecompleto'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senhac'];

	//die($nome);
    $sql = "INSERT INTO cadastro (nomecompleto, email, nome, senha) VALUES ('".$nome."','".$email."','".$usuario."','".$senha."')";
    //echo $sql;
    $result = mysqli_query($conexao, $sql);
        if($result){
            echo "Cliente Cadastrado com Sucesso!";
        }else{
            echo "Erro ao cadastrar cliente";
        }
        echo "<p><a href=\"cadastro.php\">Agora efetue o Login</a></p>";
?>