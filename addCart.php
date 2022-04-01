<?php

session_start();

include "conexao.php";


$qtd = $_POST['qtd'];
$idp = $_GET['id'];

$sql = mysqli_query($conexao, "SELECT * FROM Produto WHERE Id = " . $idp);
$dados = mysqli_fetch_assoc($sql);


if($_GET["act"]=="cart"){
	if(empty($_SESSION)){?>
		<script type="text/javascript">
			alert("Faça o login!");
			window.location.href="cadastro.php";
		</script>
	<?php
	}
	else{
		$sql2 = mysqli_query($conexao, "INSERT INTO carrinho (Quantidade, Valorunico, Valor, CProduto, NCliente) VALUES (".$qtd.",".$dados['Valor'].",".$dados['Valor'] * $qtd.",".$idp.",".$_SESSION['Id'].")");
		header("refresh: 0.3, url = index.php");
	}
}
?>