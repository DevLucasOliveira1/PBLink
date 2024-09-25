var buttonInit = document.querySelector('.button-speedtest');
var result = document.querySelector('.result-speedtest');
var plano = document.querySelector('.plano-speedtest');


buttonInit.addEventListener('click', async function() {
    async function getSpeed() {

        let timeStart = performance.now();

        try {

            let response = await fetch("http://localhost/Pessoais/PBLink/");
            let timeEnd = performance.now();
            let tempoResposta = timeEnd - timeStart;
            let velocidadeInternet = (1024 / tempoResposta) * 8 / 1000;
            return velocidadeInternet.toFixed(2) + " Mbps";

        } catch (error) {

            console.error("Erro ao medir a velocidade:", error);
            return "Erro ao calcular a velocidade";

        }
    }

    let resultado = await getSpeed();

    console.log(resultado);

    var resultadoNumber = parseFloat(resultado).toFixed(2);

    if(resultadoNumber < 0.20){

      result.innerText = 'RUIM'
      plano.innerText = 'BÁSICO+'

    } 

    if(resultadoNumber > 0.50){

      result.innerText = 'BOM'
      plano.innerText = 'MÉDIO'

    } 

    if(resultadoNumber > 1.00){

      result.innerText = 'ÓTIMO'
      plano.innerText = 'AVANÇADO'
    }

    document.querySelector('.value-speedtest').innerText = resultado;
});