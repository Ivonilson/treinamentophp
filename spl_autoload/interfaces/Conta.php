<?php

	class Conta implements OperacoesConta {

		public function sacar($valor){
			echo "O VALOR SACADO FOI: ".$valor." REAIS.<br>";
		}

		public function depositar($valor){
			echo "O VALOR DEPOSITADO FOI: ".$valor." REAIS.<br>";
		}

		public function verSaldo(){
			echo "SEU SALDO É 100 REAIS.<br>";
		}

	}

	?>