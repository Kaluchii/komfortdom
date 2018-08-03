<?php

return [

    'main_block' => [
        'string' => ['block_title', 'price', 'address']
    ],

    'about' => [
        'string' => ['block_title', 'title1', 'title2', 'title3'],
        'text' => ['text', 'text1', 'text2', 'text3'],
        'image' => ['image1', 'image2', 'image3']
    ],

    'gallery' => [
        'string' => ['block_title'],
        'imageset' => ['slider' => 'slide'],
    ],

    'flats' => [
        'string' => ['block_title'],
        'text' => ['text'],
        'file' => ['layouts'],
        'groups' => [
            'dom_flat' => [
                'string' => ['dom_flat_name']
            ],
            'layout' => [
                'image' => ['layout_scheme'],
                'string' => ['floor'],
                'float' => ['area', 'meter_cost'],
                'dom_flat' => ['superior']
            ]
        ]
    ],

    'contacts' => [
        'string' => ['block_title', 'phone', 'work_time', 'address'],
        'text' => ['text']
     ],

    'prices' => [
        'float' => ['dollar']
    ],

    'scripts' => [
        'text' => ['before_close', 'after_open', 'before_head_close'],
    ],


];
