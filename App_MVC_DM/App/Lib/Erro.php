<?php  

namespace App\Lib;

use Exception;

class Erro 
{
	private $message;
	private $code;

	public function _construct($oException = Exception::class)
	{
		$this->code = $oException->getCode();
		$this->message = $oException->getMessage();
	}

	public function render()
	{
		$varMessage = $this->message;

		if(file_exists(PATH . "/App/Views/error/".$this->code.".php")){
			require_once PATH . "/App/Views/error/". $this->code.".php";
		} else {
			require_once PATH . "/App/Views/error/500.php";
		}
		exit;
	}

}


?>