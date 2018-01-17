<?php

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

require "Pinterest.php";

$res = Pinterest::getPins("mathematical riddles fun");

$data['search'] = "mathematical riddles fun";
$data['pins'] = $res;

echo $twig->render('oppgave2.html', $data);

?>
