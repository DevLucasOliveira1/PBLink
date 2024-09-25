const link = document.querySelectorAll('nav ul li a');
var sectionRegioes = document.getElementById('regioes');
var sectionPlanos = document.getElementById('planos');
var sectionContato = document.getElementById('contato');
var menu =  document.querySelector('.header-mobile');

link.forEach((button) => {

	button.addEventListener('click', function() {

		if(window.location.href.indexOf('#planos') > -1){
		

			const elemento1 = sectionPlanos.offsetTop;

			window.scrollTo({top: elemento1, behavior: "smooth"})

		}

		if(window.location.href.indexOf('#regioes') > -1){
		

			const elemento2 = sectionRegioes.offsetTop;

			window.scrollTo({top: elemento2, behavior: "smooth"})

		}

		if(window.location.href.indexOf('#contato') > -1){
		

			const elemento3 = sectionContato.offsetTop;

			window.scrollTo({top: elemento3, behavior: "smooth"})

		}

		menu.classList.remove('header-mobile-active');

	})

})