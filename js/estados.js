var iconStates = document.querySelectorAll('.icon-states');

var boxStates = document.querySelectorAll('.regioes-box-states-single-content');

iconStates.forEach((buttonStates, indexStates) =>{
	buttonStates.addEventListener('click',()=>{

        var numeroCidades = states[indexStates].cidades.length

        var cidade = states[indexStates].cidades
        
            for(let i = 0 ; i < numeroCidades ; i++){

                boxStates[indexStates].innerHTML += `<p>${cidade[i]}</p>`;

            }

		if(boxStates[indexStates].classList.contains('regioes-box-states-single-content-active')){

			boxStates[indexStates].classList.remove('regioes-box-states-single-content-active');

            iconStates[indexStates].classList.remove('icon-states-active');

            for(let i = 0 ; i < numeroCidades ; i++){

                boxStates[indexStates].innerHTML = ``;

            }

		} else {

			boxStates[indexStates].classList.add('regioes-box-states-single-content-active');

            iconStates[indexStates].classList.add('icon-states-active');

		}

	})


})

var states = [

    {
        estado: "Alagoas",
        cidades: ["Arapiraca", "Maceió", "Palmeira dos Índios", "Penedo", "Rio Largo"]
    },

    {
        estado: "Bahia",
        cidades: ["Camaçari", "Feira de Santana", "Itabuna", "Salvador", "Vitória da Conquista"]
    },

    {
        estado: "Ceará",
        cidades: ["Crato", "Fortaleza", "Juazeiro do Norte", "Maracanaú", "Sobral"]
    },

    {
        estado: "Maranhão",
        cidades: ["Caxias", "Codó", "Imperatriz", "São Luís", "Timon"]
    },

    {
        estado: "Paraíba",
        cidades: ["Bayeux", "Campina Grande", "João Pessoa", "Patos", "Santa Rita"]
    },

    {
        estado: "Pernambuco",
        cidades: ["Caruaru", "Jaboatão dos Guararapes", "Olinda", "Petrolina", "Recife"]
    },

    {
        estado: "Piauí",
        cidades: ["Floriano", "Parnaíba", "Picos", "Piripiri", "Teresina"]
    },

    {
        estado: "Rio Grande do Norte",
        cidades: ["Macau", "Mossoró", "Natal", "Parnamirim", "São Gonçalo do Amarante"]
    },

    {
        estado: "Sergipe",
        cidades: ["Aracaju", "Estância", "Itabaiana", "Lagarto", "Nossa Senhora do Socorro"]
    }
];



