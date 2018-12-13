<?php  

//array chave/valor com informações
$data = array(
	"empresa"=>"MAMCK CONSULTORIA",
	"responsavel"=>"IVONILSON"
);

//criando cookie
if(setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600) == TRUE){
	echo "COOKIE CRIADO";
} else {
	echo "ERRO AO CRIAR COOKIE";
}

//visualizando cookie criado no navegador
if(isset($_COOKIE['NOME_DO_COOKIE'])){
	echo "<br>";
	$obj = json_decode($_COOKIE['NOME_DO_COOKIE'], TRUE);


	print_r($obj['responsavel']);


}



?>