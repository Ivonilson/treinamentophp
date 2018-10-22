<?php

interface OperacoesConta {
	public function sacar($valor);
	public function depositar($valor);
	public function verSaldo();
}

?>