<?php
    require_once("agency.crud.php");

    $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_NUMBER_INT);
    $postitle = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $postsubtitle = filter_input(INPUT_POST, 'inputSubtitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $data = filter_input(INPUT_POST, 'inputData', FILTER_SANITIZE_SPECIAL_CHARS);

    if(atualizarPost($id,$postitle, $postsubtitle,  $data))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../post.form.php?error=true');
    exit;