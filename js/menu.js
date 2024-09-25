	
	var icon = document.querySelectorAll('.icon-menu');

	var menu =  document.querySelector('.header-mobile');

	icon.forEach(laele => laele.addEventListener('click',function(){

		if(menu.classList.contains('header-mobile-active')){

			menu.classList.remove('header-mobile-active');

		} else {

			menu.classList.add('header-mobile-active');

		}

	}))	

