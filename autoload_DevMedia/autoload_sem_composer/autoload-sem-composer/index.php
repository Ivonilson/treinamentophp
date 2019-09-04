<?php

header('Content-Type: text/html; charset=utf-8');

require_once 'autoload.php';

use \App\Controllers\VendaController;

$vendaController = new VendaController();

$vendaController->index();