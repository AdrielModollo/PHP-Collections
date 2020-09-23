<?php

require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(4);
$musicas[0] = "One Dance";
$musicas[1] = "Closer";
$musicas[2] = "rockstar";
$musicas[3] = "Love Yourself";

$tocador = new TocadorDeMusica();

$tocador->adicionarMusicas($musicas);

$tocador->baixarMusicas();

//FILA 
//O PRIMEIRO A ENTRAR NA FILA É O PRIMEIRO A SAIR
//EXEMPLO: FUNCIONA COMO SE FOSSE UMA FILA DE BANCO
