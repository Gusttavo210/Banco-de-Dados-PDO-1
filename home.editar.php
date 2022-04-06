<?php
    require_once("agency.crud.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $subheading = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);


    if(atualizarHome($id, $imagem, $titulo, $subheading))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../home.form.edit.php?error=true');
    exit;