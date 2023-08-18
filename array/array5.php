<?php
/* 
Multidimentional or nested array 
*/

$foods = [
    'vegetables' => explode(', ','brinjal, brocoli, carrot, capsicam'),
    'fruits' => explode(', ','orange, banana, apple'),
    'drinks' => explode(', ','water, milk')
];

array_push($foods['drinks'], 'Orange Juice');

// print_r($foods);

echo $foods['vegetables'][1];


$sample = [
        'test' =>[
            'test-again'=>[
                'a', 'b', 'c', 'd'
            ]
        ],
    ];

// print_r($sample);

echo $sample['test']['test-again'][3];

echo "\n";

$sample2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444,[5,6,7]]
];

// print_r($sample2);

echo $sample2[3][4][2];