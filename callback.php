<?php

function imprime($qtd, $callback)
{
    for ($i = 0; $i < $qtd; $i++) {
        $callback($i);
    }
}

imprime(5, 'mostrarNaTela');

function mostrarNaTela ($contador) {
    echo "$contador";
}

?>