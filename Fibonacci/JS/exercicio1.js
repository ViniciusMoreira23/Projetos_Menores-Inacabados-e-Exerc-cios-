	function fibonacci(){
			console.log("teste");
			var numResposta = document.getElementById("numero").value;
			console.log(numResposta);
			var num1 = 0;
			var num2 = 1;
			var numAtual = 0;

			while(numAtual < numResposta){

					numAtual = num1 + num2;
					num1 = num2;
					num2 = numAtual;

			}

			if(num2 == numResposta){

				document.getElementById("resp").innerText = "Este número faz parte da série";

			}else{

				document.getElementById("resp").innerText = "Este número não faz parte da série, o numero menor mais próximo pertencente a série é: " + num1;

			}
	}