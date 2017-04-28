<?php

return [
    'parent'=> 'parent_id',
    'primary_key' => 'id',
    'generate_url'   => true,
    'childNode' => 'child',
    'body' => [
        'id',
        'name',
        'slug',
    ],
    'html' => [
        'label' => 'name',
        'href'  => 'slug'
    ],
    'dropdown' => [
        'prefix' => '&nbsp;&nbsp;&nbsp;-',
        'label' => 'name',
        'value' => 'id' ,
        'class'=>'dropdown'
    ]
];
