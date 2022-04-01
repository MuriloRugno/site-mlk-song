<?php

include "header.php";

$sql = mysqli_query($conexao, "SELECT * FROM Produto WHERE Quantidade > 0");

?>

<body onLoad="slide1(); slide3(); slide5();" class="background-home background">
	<!--primeira sessão do site-->
	<section>

		<div id="modo">	<!-- MODO CONTRASTE -->
					<h1 id="noturnoau" class="noturno">Modo Contraste</h1>
				</div>

			<div id="container-botao-on-off">
				<!-- ATIVAR CONTRASTE -->
				<button>
					<a href="home-contraste.php" title="Ativar contraste">ON</a>
				</button>
				<!-- DESATIVAR CONTRASTE -->
				<button>
					<a href="index.php" title="Desativar contraste">OFF</a>
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
		<!--Identidade Visual do site, clicável (redireciona para a página principal)-->
		<a href="home_page.php"><img class="mlksongcenter" src="Imagens/vetores/logomlk2.png" alt="imagem do logo mlk no centro"></a>
		<!--Botoes de logar e registrar colocados em uma div de estrutura-->
		<?php 
		if(empty($_SESSION)){?>
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
		</div><?php }
		?>
		<!--Estrutura dos albuns de música-->
		<!--ALBUNS-->
		<?php
		while($con = mysqli_fetch_assoc($sql)){

			// AQUI ESTA MOSTRANDO TODOS OS PRODUTOS CADASTRADOS NO SITE
		?>
			<div id="albuns1"><center>
				<div class="album-item">
					<div class="albunhalf">
						<img src="Imagens/albuns/<?php echo $con['img']?>" alt="albun de música do HALF, faixa preta em baixo e a foto do cantor na parte superior" style="max-width:100%"></a>
						<input type="number" name="qtd" id="qtd">
					<!--botão de compra com o respectivo preço-->
					</div>

					<div id="infos">
						<form method="POST" action="addCart.php?act=cart&id=<?php echo $con['Id']?>"><!-- NESTE FORM, ESTA CHAMANDO OUTRO ARQUIVO PARA EXECUTAR A AÇÃO DE INSERIR O PRODUTO NO CARRINHO-->
							<input type="submit" class="buy" value="Comprar" style="width: auto">							
							<p id="preco1" class="preco">$ <?php echo number_format($con['Valor'],2)?></p>
							<input type="number" name="qtd" id="qtd" class="preco" placeholder="quantidade" min=0 max="<?php echo $con['Quantidade']?>">
						</form>
					</div>
					<br/><br/><br/><br/><br/>
				</div>
			</center>
			</div>
		<?php } ?>

	</section>
	<!--Caixa de pesquisa de musicas-->


</body>

</php>