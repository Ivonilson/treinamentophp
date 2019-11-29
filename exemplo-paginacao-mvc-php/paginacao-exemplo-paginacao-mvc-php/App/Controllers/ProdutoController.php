<?php

namespace App\Controllers;

use App\Lib\ConversorMonetario;
use App\Lib\Sessao;
use App\Lib\Paginacao;
use App\Models\DAO\ProdutoDAO;
use App\Models\Entidades\Produto;
use App\Models\Validacao\ProdutoValidador;

class ProdutoController extends Controller
{
    public function index($params)
    {
        $produtoDAO = new ProdutoDAO();

        $paginaSelecionada  = isset($_GET['paginaSelecionada']) ? $_GET['paginaSelecionada'] : 1;
        $totalPorPagina     = isset($_GET['totalPorPagina']) ? $_GET['totalPorPagina'] : 5;

        if(isset($_GET['buscaProduto'])){

            $listaProdutos      = $produtoDAO->buscaComPaginacao($_GET['buscaProduto'], $totalPorPagina, $paginaSelecionada);

            $paginacao = new Paginacao($listaProdutos);
            
            self::setViewParam('buscaProduto', $_GET['buscaProduto']);
            self::setViewParam('paginacao', $paginacao->criarLink($_GET['buscaProduto']));
            self::setViewParam('listaProdutos'  , $listaProdutos['resultado']);
        }

        self::setViewParam('totalPorPagina', $totalPorPagina);


        $this->render('/produto/index');

        Sessao::limpaMensagem();
    }
    public function totalPorPagina() {

        if(isset($_POST['totalPorPagina'])){
            $_SESSION['totalPorPagina'] = $_POST['totalPorPagina'];
        } else {
            $_SESSION['totalPorPagina'] = 5;
        }

        exit;
    }
}