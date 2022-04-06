<?php

    include_once('./php/agency.crud.php');

    session_start();

    if(filter_input(INPUT_GET, 'id') !== null) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['post_dados'] = localizaPostPeloID($id);
    } else {
        $_SESSION['post_lista'] = listapost();
    }