<?php

add_action('wp_head', 'alerta_cb', 20);

function alerta_cb()
{
    $soma = 1 + 5;
    echo '<meta description="Teste 20" />';
}

add_action('wp_head', 'alerta_cb2', 15);

function alerta_cb2()
{
    $soma = 1 + 5;
    echo '<meta description="Teste 15"/>';
}

add_action('my_action', 'my_func');

function my_func()
{
    echo "Clicou";
}

?>