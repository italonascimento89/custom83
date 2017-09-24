<?php


$router->get('login','PagesController@login');

$router->post('autenticar','PagesController@autenticarUser');
$router->post('cliente','PagesController@cliente');
