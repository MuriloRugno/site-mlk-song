/* Kassiel - Kelvin - Lucas Scarpini - Murilo */
function slide1() {
	document.getElementById('img-album').src = "Imagens/albuns/half.jpg";
	setTimeout("slide2()", 3000)/* Carrossel chamando imagens para serem trocadas*/
}

function slide2() {
	document.getElementById('img-album').src = "Imagens/artistas/j-park.jpg";
	setTimeout("slide1()", 3000)/* Carrossel chamando imagens para serem trocadas*/
}


