<?php
include "header.php";
?>
<body class="background-contato">
		<section>
			<!--Nesta parte fica a sessão da página-->

			<div id="modo">	<!-- MODO CONTRASTE -->
					<h1 id="noturnoau" class="noturnocontato">Modo Contraste</h1>
				</div>

			<div id="container-botao-on-off">
				<!-- ATIVAR CONTRASTE -->
				<button>
					<a href="contato-contraste.php" title="Ativar contraste">ON</a>
				</button>
				<!-- DESATIVAR CONTRASTE -->
				<button>
					<a href="contato.php" title="Desativar contraste">OFF</a>
				</button>
			</div>

			<!--Texto para descrever os botões de acessibilidade-->
			<div id="textofonte-contato">
				<div id="aumentarfonte">
					<p id="fonte-contato">Aumento e Diminuição da Fonte</p>
				</div>
			</div>
			<!--Div que contém os dois botões de acessibilidade de aumento e diminuição de fonte-->
			<div id="estruturaacess-contato">
				<div class="botaoacess">
					<!-- AUMENTAR FONTE -->
					<button onclick="fontcontatomais()">
						<a class="aumentar" title="Aumentar Fonte" alt="Aumentar">A+</a>
					</button>
					<!-- DIMINUIR FONTE -->
					<button onclick="fontcontatomenos()">
						<a class="diminuir" title="Diminuir Fonte" alt="Diminuir">A-</a>
					</button>
				</div>
			</div>
			<div id="container-campo-informacoes">
				<!--Div que contém todas as informações de atendimento do site-->
				<h1 class="canaisatt" id="campo-de-infos">Canais de Atendimento</h1>
				<p class="tell" id="tellau">Telefone MLK Song Music</p>
				<!--Telefone-->
				<p class="numbtell" id="numbtellau">(16) 99174-3443</p>
				<!--Telefone-->
				<p class="comercial" id="comercialau">Comercial</p>
				<p class="contato-comercial" id="contato-au">mlkcomercial@gmail.com</p>
				<!--Email para contato-->
				<p class="relacionamento" id="relacionamentoau">Relacionamento</p>
				<p class="email-relacionamento" id="email-au">mlkrelacionamento@gmail.com</p>
				<!--Email para relacionamento-->
				<p class="parcerias" id="parceriasau">Parcerias</p>
				<p class="email-parcerias" id="email-parcerias-au">mlkparcerias@gmail.com</p>
				<!--Email para parcerias-->
			</div>

			<div id="redes-sociais">
				<!--Div contendo as redesociais-->
				<a href="https://www.facebook.com/"><img class="icon-face" src="Imagens/vetores/facebook-icon.jpg" alt="logo do facebook"></a>
				<a href="https://plus.google.com/discover"><img class="icon-google" src="Imagens/vetores/googleplus-icon.jpg" alt="logo do google plus"></a>
				<a href="https://www.instagram.com/?hl=pt-br"><img class="icon-instagram" src="Imagens/vetores/instagram-icon.jpg" alt="logo do instagram"></a>
				<a href="#"><img class="icon-twitter" src="Imagens/vetores/twitter-icon.jpg" alt="logo do twitter"></a>
			</div>

			<div id="entre-contato">
				<!--Div que contém a parte de entrar em contato-->
				<h1 id="escritaau" class="escrita-entre-em-contato">Entre em Contato</h1>
			</div>

			<form name="formulario" method="POST">
				<div id="container-campos-contato">
					<!--Campo para preechimento do nome-->
					<input class="nome" type="text" name="nome" id="nome" placeholder="*Nome">
					<!--Campo para preechimento do email-->
					<input class="email" type="text" name="email" id="email" placeholder="*Email">
					<!--Campo para preechimento do telefone-->
					<input class="telefone" type="text" name="telefone" id="tel" placeholder="*Telefone">
					<!--Campo para preechimento da mensagem a ser escrita pelo usuário-->
					<textarea class="mensagem" rows="6" cols="10" maxlength="100" placeholder="Mensagem"></textarea>
				</div>
				<div id="container-enviar-limpar">
					<!--Botões para enviar e para limpar os dados-->
					<input id="enviardd" onclick="enviar();" type="button" class="enviar-dados" name="botao" value="Enviar Dados">

					<input id="resetdd" type="reset" class="limpar-dados" name="Resetar" value="Limpar Dados">
				</div>
			</form>
		</section>
	</div>
</body>

</php>