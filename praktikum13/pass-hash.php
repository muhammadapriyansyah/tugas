<?php
    $option = [
        'cost => 10',
    ];
    $passwordku = "yansyah";
    $password_hash = password_hash($passwordku,
        PASSWORD_DEFAULT,$option);
    echo $password_hash;

?>