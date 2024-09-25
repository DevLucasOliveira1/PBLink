var planos = document.querySelectorAll('.planos-box-single');

var teste = ['teste','teste2']

var info = [

	{
		"preco":"79,99",
		"plano":"básico",
		"pacote":"70",
		"download":"70",
		"upload":"35"
	},

	{
		"preco":"89,99",
		"plano":"básico+",
		"pacote":"200",
		"download":"200",
		"upload":"100"
	},

	{
		"preco":"99,99",
		"plano":"médio",
		"pacote":"300",
		"download":"300",
		"upload":"150"
	},

	{
		"preco":"119,99",
		"plano":"médio+",
		"pacote":"500",
		"download":"500",
		"upload":"250"
	},

	{
		"preco":"199,99",
		"plano":"avançado",
		"pacote":"1",
		"download":"1024",
		"upload":"512"
	},

]


planos.forEach((plano, index) => plano.addEventListener('click',()=>{
	
	var id = index;

	// console.log(info[id]);

	var changeToString = JSON.stringify(info[id])

	// console.log(changeToString)

	window.location="cart?"+encodeURIComponent(changeToString)

}))