<?php

  //importa o composer para carregar as notas
require __DIR__. '/../vendor/autoload.php';

//obtem a url do navegador
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if($url == "/")
{
  require __DIR__. '/../app/Views/home.php';
}
echo $url
?>