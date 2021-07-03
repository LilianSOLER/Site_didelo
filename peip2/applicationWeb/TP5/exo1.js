
window.onload = function () {
	
	// les noms des fichiers images
	var sources = ["paysage-1.jpg", "paysage-2.jpg", "paysage-3.jpg",
		"paysage-4.jpg", "paysage-5.jpg", "paysage-6.jpg",
		"paysage-7.jpg", "paysage-8.jpg", "paysage-9.jpg"];

	// l'indice de l'image actuellement visible
	var indice = 1;
	
	//on trouve dans le dom la balise image où l'on va afficher les paysages
	var showId = document.getElementById('show');

	// affiche l'image suivante
	function next() {
		if(indice<sources.length){
			indice += 1;
		} else {
			indice = 1;
		}
		src = "images/paysage-" + indice + '.jpg';
		showId.setAttribute("src", src);
	}

	// affiche l'image précédente
	function previous() {
		if(indice > 1){
			indice -= 1;
		} else {
			indice = sources.length;
		}
		src = "images/paysage-" + indice + '.jpg';
		showId.setAttribute("src", src);
	}

	// ici, il faut relier le JS à l'évènement "onclick" sur
	// les deux "flèches" (les images)
	let arrowDivs = document.getElementsByClassName('arrow');

	arrowDivs[0].onclick = previous ;
	arrowDivs[1].onclick = next ;

};
