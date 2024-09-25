var boxPlano = document.getElementById('box-plano');
var boxPacote = document.getElementById('box-pacote');
var boxDownload = document.getElementById('box-download');
var boxUpload = document.getElementById('box-upload');
var boxPreco = document.getElementById('box-preco');

if(window.location.href.indexOf('cart') > -1){

	var query = window.location.search.substring(1);

	var arr = JSON.parse(decodeURIComponent(query))

	// console.log(arr)

	boxPlano.innerHTML = arr.plano;
	boxPacote.innerHTML = arr.pacote+" mega";
	boxDownload.innerHTML = arr.download+" mbps";
	boxUpload.innerHTML = arr.upload+" mbps";

	boxPreco.innerHTML = "R$ "+arr.preco+" /mês";


} else {

	//

}

const formCart = document.querySelector('#cart-form');

formCart.addEventListener('submit', function(e){

	e.preventDefault();

	const dataCart = Object.fromEntries(new FormData(event.target).entries())

	const message = document.querySelector('.cart-message');

	const barloading = document.querySelector('.cart-message-loading')

	if(dataCart.nome == '' || dataCart.email == '' || dataCart.cpf == "" || dataCart.data == '' || dataCart.whatsapp == ''){

		message.classList.add('cart-message-active');
		barloading.classList.add('cart-message-loading-active');

		setTimeout(()=>{

			message.classList.remove('cart-message-active');
			barloading.classList.remove('cart-message-loading-active');

		}, 3000)

	} else {

		console.log(dataCart);
		console.log('Plano Desejado: '+arr.plano);

	}

})