<?php
    require_once("agency.crud.php");

    $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_NUMBER_INT);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);


    if(atualizarSobre($id, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../about.form.edit.php?error=true');
    exit;