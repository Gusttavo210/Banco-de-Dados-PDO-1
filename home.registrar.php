<?php
    require_once("agency.crud.php");

    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $$titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $subheading = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);

    if(cadastrarHome($imagem, $titulo, $subheading))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../home.form.php?error=true');
    exit;