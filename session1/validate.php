<?php

$validate = [
    "username" => [
        'filter' => FILTER_VALIDATE_REGEXP ,
        'errorMsg' => 'userName invalid',
        'myOption' => ['options' => ['regexp' => '/^[a-zA-Z]+$/']]
    ],
    "email" => [
        'filter' => FILTER_VALIDATE_EMAIL,
        'errorMsg' => 'email invalid',
        'myOption' => ['options' => null]
    ],
    "password" => [
        'filter' => FILTER_VALIDATE_REGEXP ,
        'errorMsg' => 'password invalid',
        'myOption' => ['options' => ['regexp' => '/^[a-zA-Z]+$/']]
    ],
    "age" => [
        'filter' => FILTER_VALIDATE_INT,
        'errorMsg' => 'age invalid',
        'myOption' => ['options' => ['min_range' =>18, 'max_range'=>60]]
    ]
    ];