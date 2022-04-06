<?php
    require_once("agency.crud.php");

    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);


    if(cadastrarSobre( $descricao) )
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../about.form.php?error=true');
    exit;