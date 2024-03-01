<?php
class Produto
{
    public $descricao;
    public $estoque;
    public $preco;
    

}

$p1 = new Produto;
$p1 -> descricao = 'chocolate';
$p1 -> estoque = 10;
$p1 -> preco = 5;


$p2 = new Produto;
$p2 -> descricao = 'café';
$p2 -> estoque = 2;
$p2 -> preco = 20;

echo "<pre>";
var_dump($p1);
print_r($p2);
echo "</pre>";
?>