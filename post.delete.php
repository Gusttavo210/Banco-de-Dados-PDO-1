<?php
    require_once("agency.crud.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(apagarPost($id))
    {
        header('Location: ../post.list.php?success');
        exit;
    }

    header('Location: ../post.list.php?error');
    exit;