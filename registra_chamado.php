<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

 
    //trabalhando montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; //PHP_EOL encerra e pula linha.

    //abrindo arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    //escrendo o texto
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');


    

?>