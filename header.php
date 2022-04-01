<?php

include "conexao.php";

session_start();

ini_set('display_errors', 0);
error_reporting(0);

if($_GET["act"]=="logout"){
	session_destroy();
	header("location:index.php");
}

$sql = mysqli_query($conexao, "SELECT * FROM cadastro where Id = " . $_SESSION['Id']);
$con = mysqli_fetch_assoc($sql);


?>

<!DOCTYPE html>
<!--Murilo Lucas Scarpini-->
<html lang="pt-br">

<head>
	<title>MLK Song Music</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilocss/estilocss.css" >
	<link rel="stylesheet"  media="(min-width: 1025px) and (max-width: 1280px)" href="./estilocss/mediaquerieshome.css">
	<script type="text/javascript" src="javascript/script-albuns/scriptalbun1.js"></script>
	<script type="text/javascript" src="javascript/script-albuns/scriptalbun2.js"></script>
	<script type="text/javascript" src="javascript/script-albuns/scriptalbun3.js"></script>
	<script type="text/javascript" src="javascript/script-acessibilidades/botão-acessivel.js"></script>
	<script type="text/javascript" src="javascript/script-acessibilidades/botão-acessivel2.js"></script>

</head>


	<!--Aqui fica o menu do site-->

	<header id="menufixo">


		<!--<a href="audiosobreosite.php">audio acessivel sobre o site</a><br/>

				<audio src="sobreosite.mp3" controls autoplay loop></audio>-->

		<nav>
			<!--Nesta parte fica o menu, onde contem as abas para determinada função-->

			<a href="index.php"><img class="mlksong" src="Imagens/vetores/logomlk.png" alt="imagem do logo mlk"></a>

			

			<div id="menu">
				<!--lista com links para clicar-->

				<ul>
					<?php if(!empty($_SESSION['Nm'])){?>
						<li><a href="#">Olá <?php echo $_SESSION['Nm']?></a></li>
						<li><a href="pedidos.php">Meus pedidos</a></li>
						<a href="carrinho.php"><img class="loja" src="Imagens/vetores/compra.png" alt="carrinho de compra supermercado"></a>
					<?php } 
						if($con['TipoConta']==1){ ?>
						<li><a href="estoque.php">Estoque</a></li>
					<?php } ?>
					<li><a id="contatoau" href="index.php">Produtos</a></li>
					<li><a id="contatoau" href="contato.php">Contato</a></li>
						
						<?php
						if(empty($_SESSION)){?>
							<li><a id="cadastroau" href="cadastro.php">Cadastre-se</a></li>
					<?php
						} else{
							?>
							<li><a href="?act=logout">Sair</a></li>
							<?php

						}?>


				</ul>

			</div>
		</nav>

	</header>

