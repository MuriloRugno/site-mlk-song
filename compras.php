<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>MLK Song Music</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilocss/estilocss.css" >
	<link rel="stylesheet"  media="(min-width: 1025px) and (max-width: 1280px)" href="./estilocss/mediaquerieshome.css">
	<!-- <script type="text/javascript" src="javascript/script-albuns/scriptalbun1.js"></script>
	<script type="text/javascript" src="javascript/script-albuns/scriptalbun2.js"></script>
	<script type="text/javascript" src="javascript/script-albuns/scriptalbun3.js"></script> -->
	<script type="text/javascript" src="javascript/script-acessibilidades/botão-acessivel.js"></script>
	<script type="text/javascript" src="javascript/script-acessibilidades/botão-acessivel2.js"></script>

</head>


<body onLoad="slide1(); slide3(); slide5();" class="background-home background">
	<!--Aqui fica o menu do site-->

	<header id="menufixo">


		<!--<a href="audiosobreosite.php">audio acessivel sobre o site</a><br/>

				<audio src="sobreosite.mp3" controls autoplay loop></audio>-->

		<nav>
			<!--Nesta parte fica o menu, onde contem as abas para determinada função-->

			<a href="home_page.php"><img class="mlksong" src="Imagens/vetores/logomlk.png" alt="imagem do logo mlk"></a>

			<a href="compras.php"><img class="loja" src="Imagens/vetores/compra.png" alt="carrinho de compra supermercado"></a>

			<div id="menu">
				<!--lista com links para clicar-->

				<ul>

					<li><a id="homeau" href="home_page.php">Home</a></li>
					<li><a id="contatoau" href="contato.php">Contato</a></li>
					<li><a id="cadastroau" href="cadastro.php">Cadastre-se</a></li>

				</ul>

			</div>
		</nav>

	</header>
	<!--primeira sessão do site-->
	<section>

		<div id="modo">	<!-- MODO CONTRASTE -->
					<h1 id="noturnoau" class="noturno">Modo Contraste</h1>
				</div>

			<div id="container-botao-on-off">
				<!-- ATIVAR CONTRASTE -->
				<button>
					<a href="#" title="Ativar contraste">ON</a>
				</button>
				<!-- DESATIVAR CONTRASTE -->
				<button>
					<a href="#" title="Desativar contraste">OFF</a>
				</button>
			</div>

		<!--Texto para descrever os botões de acessibilidade-->
		<div id="textofonte">
			<div id="fontnoau">
				<p id="fonte">Aumento e Diminuição da Fonte</p>
			</div>
		</div>

		<!--Div que contém os dois botões de acessibilidade de aumento e diminuição de fonte-->

		<div id="estruturaacess">
			<div class="botaoacess">
				<!-- DIMINUIR FONTE -->
				<button onclick="fonthomemais()">
					<a class="aumentar" title="Aumentar Fonte" alt="Aumentar">A+</a>
				</button>
				<!-- AUMENTAR FONTE -->
				<button onclick="fonthomemenos()">
					<a class="diminuir" title="Diminuir Fonte" alt="Diminuir">A-</a>
				</button>
			</div>
		</div>
		<!--Botoes de logar e registrar colocados em uma div de estrutura-->
		<div id="estruturabotoes">
			<a href="cadastro.php"><!--Link para a página de cadastro-->
				<div id="entrar">
					<h1 id="logar" class="logar">Entrar</h1><!--Botão para entrar na página de cadastro-->
				</div>
			</a>

			<a href="cadastro.php"><!--Link para a página de cadastro-->
				<div id="register">
					<h1 id="registroau" class="registrar">Registrar</h1><!--Botão para entrar na página de cadastro na parte de registro-->
				</div>
			</a>
		</div>
		<!--Estrutura dos albuns de música-->
			<!--album de musica 1-->
			<div id="albuns1">
				<div class="album-item">
					<div class="albunhalf">
						<a href="compras.php"><img id="img-album" src="Imagens/albuns/half.jpg" alt="albun de música do HALF, faixa preta em baixo e a foto do cantor na parte superior"></div></a>
					<!--botão de compra com o respectivo preço-->
					<div id="infos">
						<a href="compras.php">
							<p id="compra1" class="buy">Comprar</p>
						</a>
						<p id="preco1" class="preco">$12,00</p>
					</div>
				</div>
			</div>
			<!--album de musica 2-->
			<div id="albuns2">
				<div class="album-item2">
					<div class="albunjaypark">
						<a href="compras.php"><img id="img-album2" src="Imagens/albuns/jaypark.jpg" alt="japones fundo branco e o nome dele embaixo"></div></a>
					<!--botão de compra com o respectivo preço-->
					<div id="infos2">
						<a href="compras.php">
							<p id="compra2" class="buy2">Comprar</p>
						</a>
						<p id="preco2" class="preco2">$12,00</p>
					</div>
				</div>
			</div>
			<!--album de musica 3-->
			<div id="albuns3">
				<div class="album-item3">
					<div class="albunjamesbay">
						<a href="compras.php"><img id="img-album3" src="Imagens/albuns/jamesbay.jpg" alt="cantor segurando seu violão sentado em uma poltrona"></div></a>
					<!--botão de compra com o respectivo preço-->
					<div id="infos3">
						<a href="compras.php">
							<p id="compra3" class="buy3">Comprar</p>
						</a>
						<p id="preco3" class="preco3">$15,00</p>
					</div>
				</div>
			</div>
			<!-- album de musica 4 -->
			<div id="albuns4">
				<div class="album-item4">
					<div class="album4">
						<a href="compras.php"><img id="img-album4" src="Imagens/artistas/j-park.jpg" alt="albun de música do HALF, faixa preta em baixo e a foto do cantor na parte superior"></a>
					</div>
					<!--botão de compra com o respectivo preço-->
					<div id="infos4">
						<a href="compras.php">
							<p id="compra4" class="buy4">Comprar</p>
						</a>
						<p id="preco4" class="preco4">$12,00</p>
					</div>
				</div>
			</div>
			<!--album de musica 5-->
			<div id="albuns5">
				<div class="album-item5">
					<div class="albunjaypark">
						<a href="compras.php"><img id="img-album5" src="Imagens/artistas/sik-k.jpg" alt="japones fundo branco e o nome dele embaixo"></div></a>
					<!--botão de compra com o respectivo preço-->
					<div id="infos5">
						<a href="compras.php">
							<p id="compra5" class="buy5">Comprar</p>
						</a>
						<p id="preco5" class="preco5">$12,00</p>
					</div>
				</div>
			</div>
			<!--album de musica 6-->
			<div id="albuns6">
				<div class="album-item6">
					<div class="albunjamesbay">
						<a href="compras.php"><img id="img-album6" src="Imagens/artistas/sik-k2.jpg" alt="cantor segurando seu violão sentado em uma poltrona"></div></a>
					<!--botão de compra com o respectivo preço-->
					<div id="infos6">
						<a href="compras.php">
							<p id="compra6" class="buy6">Comprar</p>
						</a>
						<p id="preco6" class="preco6">$15,00</p>
					</div>
				</div>
			</div>

	</section>

</body>

</php>