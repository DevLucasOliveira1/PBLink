const formLogin = document.querySelector('#login-form');

formLogin.addEventListener('submit', function(e){

	e.preventDefault();

	const dataLogin = Object.fromEntries(new FormData(event.target).entries());

	const message = document.querySelector('.login-message');

	const barloading = document.querySelector('.login-message-loading')

	if(dataLogin.nome == '' || dataLogin.senha == ''){

		message.classList.add('login-message-active');
		barloading.classList.add('login-message-loading-active');

		setTimeout(()=>{

			message.classList.remove('login-message-active');
			barloading.classList.remove('login-message-loading-active');

		}, 3000)

	} else {

		console.log(dataLogin);

	}

})