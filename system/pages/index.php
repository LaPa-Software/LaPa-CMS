<?php
$PAGE=[
    'id'=>'index',
    'title'=>'Главная',
    'body'=>file_get_contents(ROOT.'system/pages/index.html'),
    'build'=>'top_menu();',
    'dependency'=>[
        'user',
        'menu'
    ]
];