/* Kassiel - Kelvin - Lucas Scarpini - Murilo */
function slide3() {
	document.getElementById('img-album2').src = "Imagens/albuns/jaypark.jpg";
	setTimeout("slide4()", 3000)/* Carrossel chamando imagens para serem trocadas*/
}

function slide4() {
	document.getElementById('img-album2').src = "Imagens/artistas/sik-k.jpg";
	setTimeout("slide3()", 3000)/* Carrossel chamando imagens para serem trocadas*/
}