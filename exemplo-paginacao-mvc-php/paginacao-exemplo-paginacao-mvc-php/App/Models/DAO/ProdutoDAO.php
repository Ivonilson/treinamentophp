<?php

namespace App\Models\DAO;

use App\Models\Entidades\Produto;
use App\Models\Paginacao;

class ProdutoDAO extends BaseDAO
{
    public  function buscaComPaginacao($buscaProduto, $totalPorPagina, $paginaSelecionada)
    {

        $paginaSelecionada = (!$paginaSelecionada) ? 1 : $paginaSelecionada;

        $inicio = (($paginaSelecionada - 1) * $totalPorPagina);

        $whereBusca = " WHERE nome 
                                LIKE '%$buscaProduto%' OR descricao 
                                LIKE '%$buscaProduto%' OR ean = '$buscaProduto'
                         ";

        $resultadoTotal = $this->select(
            "SELECT count(*) as total FROM produto $whereBusca "
        );

        $resultado = $this->select(
            "SELECT * FROM produto as produto $whereBusca LIMIT $inicio,$totalPorPagina"
        );
        
        $totalLinhas      = $resultadoTotal->fetch()['total'];

        return ['paginaSelecionada' => $paginaSelecionada,
                'totalPorPagina'    => $totalPorPagina,
                'totalLinhas'       => $totalLinhas,
                'resultado'         => $resultado->fetchAll(\PDO::FETCH_CLASS, Produto::class)];

    }
}