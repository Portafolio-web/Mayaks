function irArriba(pxPantalla){
	window.addEventListener('scroll', () => {
		var scroll = document.documentElement.scrollTop;
		var arriba = document.getElementById('arriba');

		if(scroll > 300){
			arriba.style.right = 20 + "px";
		}else{
			arriba.style.right = -100 + "px";
		}

	})
	
}

irArriba (500);		
