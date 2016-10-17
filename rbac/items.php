<?php
return [
    'onlyAdmin' => [
        'type' => 2,
        'description' => '只有管理员才能访问的权限',
    ],
    'createPost' => [
        'type' => 2,
        'description' => 'Create a post',
    ],
    'updatePost' => [
        'type' => 2,
        'description' => 'Update post',
    ],
    'author' => [
        'type' => 1,
        'children' => [
            'createPost',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'updatePost',
            'author',
            'onlyAdmin',
        ],
    ],
];
