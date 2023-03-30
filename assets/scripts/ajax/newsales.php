<?php
    session_start();
    unset($_SESSION['cart_item']);
    unset($_SESSION['cart_origin']);
    echo 'OK';
?>