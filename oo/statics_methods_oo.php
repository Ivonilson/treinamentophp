<?php  
	
	class Documento {

		//declarando um atributo (variável) da classe
		private $numero;

		/*criando métodos get e set para acesso externo ao(s) atributo(s) da classe, uma vez que o atributo foi definido como privado*/
		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			/*acessando o método estático validaCPF(). A sintaxe para acessar um método estático é o seguinte: "nome da classe + :: + nome do método."*/
			$validacao = Documento::validaCpf($numero);
			if($validacao == true){
				echo "CPF VÁLIDO.";
			} else {
				echo "CPF INVÁLIDO.";
			}

			$this->numero = $numero;
		}

		/*método estático para validação do CPF. A funcão strlen verifica a quantidade de caracteres na string ou referência (variável) passada como argumento. Com a versão do PHP 7 é possível declarar o tipo de retorno da função (bool, string, int, etc.) */
		public static function validaCpf($cpf):bool {
			if(strlen($cpf) == 11) return true;
			if(empty($cpf)) echo "CPF NÃO INFORMADO.<br>";
			return false;
		}

	}	

	//Instanciando um objeto e fazendo a validação através do setNumero()
	$documento1 = new Documento();
	$documento1->setNumero("11111111111");

	//Fazendo a validação de forma direta, sem instanciar um objeto da classe
	//var_dump(Documento::validaCpf("12345678909"));

?>
