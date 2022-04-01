<?php

include 'conexao.php';

$nome = $_POST['nome'];
$senha = $_POST['pass'];

$sql = "SELECT * FROM cadastro WHERE nome = '". $nome . "' AND senha = '". $senha. "'";
//echo $sql;	
$result = mysqli_query($conexao, $sql);
	if(mysqli_num_rows($result) == 1){
		$dados = mysqli_fetch_assoc($result);

		session_start();

		$_SESSION['Nm'] = $dados['Nome'];
		$_SESSION['Id'] = $dados['ID'];

		header("location: index.php");
	}

	else{
		header("location: cadastro.php");
	}

	//$_SESSION['nome'] = $nome;
	//$_SESSION['senha'] = $senha;
	//header('location:home_page.php');
	/*else{
		unset($_SESSION['nome']);
		unset($_SESSION['senha']);
	?>
	<script type="text/javascript">
		alert("Login Incorreto");
		window.location.href="cadastro.php";
	</script>
	<?php
}*/
?>