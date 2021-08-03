<?php
    header('Location: ./login/');
    require '../common/auth.php';

    if(isLogin()) {
        header('Location: ../memo/');
        exit;
    }   
    exit;