/* Kassiel - Kelvin - Lucas Scarpini - Murilo */
function slide5() {
	document.getElementById('img-album3').src = "Imagens/albuns/jamesbay.jpg";
	setTimeout("slide6()", 3000)/* Carrossel chamando imagens para serem trocadas*/
}

function slide6() {
	document.getElementById('img-album3').src = "Imagens/artistas/sik-k2.jpg";
	setTimeout("slide5()", 3000)/* Carrossel chamando imagens para serem trocadas*/
}