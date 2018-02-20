<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 19/02/2018
 * Time: 19:55
 */

include 'vendor/autoload.php';

$c = new App\Model\Curso();
$c->setNome("Programação com Android");
$c->setValor(500.50);

$cDAO = new App\DAO\CursoDAO();
$cDAO->inserir($c);

echo $c->getNome() . " - " . $c->getValor();

