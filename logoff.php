<?php

    session_start();

    session_destroy();
    header('Location: index.php');

    //remover indices do array de sessao
    //unset() - espera array e indice a ser eliminado




    //destruir variavel de sessao
    //session_destroy()
?>