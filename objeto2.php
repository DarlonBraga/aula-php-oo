<?php

//adicionar métodos a classe

class Produto
{
    public $descricao;
    public $estoque;
    public $preco;
    
    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >=0)
        {
            $this->estoque += $unidades;
        }
    }
    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >=0)
        {
            $this->estoque -= $unidades;
        }
    }
    public function reajustarPreco($percentual)
    {
        if (is_numeric($percentual) and $percentual >=0)
        {
            $this->preco *= (1 + ($percentual/100));
        }
    }
}

$p1 = new Produto;
$p1 -> descricao = 'Chocolate';
$p1 -> estoque = 10;
$p1 -> preco = 10;

echo "<pre>";
var_dump($p1);
echo "</pre>";
/*
echo "O estoque de {$p1->descricao} é {$p1->estoque} <br>";
echo "O preço de {$p1->descricao} é {$p1->preco} <br>";
*/
$p1 -> aumentarEstoque(10);
$p1 -> diminuirEstoque(1);
$p1 -> reajustarPreco(10);

echo "<pre>";
var_dump($p1);
echo "</pre>";
/*
echo "O estoque de {$p1->descricao} é {$p1->estoque} <br>";
echo "O preço de {$p1->descricao} é {$p1->preco} <br>";
*/

?>
