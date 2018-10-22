<?php  
	
	/*A interface define padrões que serão utilizados no sistema.*/
	//declarando uma interface de exemplo:
	interface Veiculo {

		public function acelerar($velocidade);
		public function frear($velocidade);
		public function trocarMarcha($marcha);
	
	}	

	/*criando uma classe que implementará a interface veiculo. Caso a classe seja chamada sem a implementação dos métodos abstratos definidos em Veiculo,  ocorrerá um Fatal Error indicando os métodos da interface que não foram implementados. O erro cessará apenas quando todos os métodos definidos na interface forem implementados.*/
	class Corola implements Veiculo {
		public function acelerar($velocidade){
			echo $velocidade;
		}

		public function frear($velocidade){
			echo $velocidade;
		}

		public function trocarMarcha($marcha){
			echo $marcha;
		}
	}

		$corolaVermelho = new Corola();
		$corolaVermelho->acelerar(100);

?>
