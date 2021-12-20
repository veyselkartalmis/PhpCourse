<?php

    $kategoriler = [
        'siteler' => [
            'egitim' => [
                'udemy',
                '93academy'
            ],
            'e-ticaret' =>[
                'sahibinden',
                'n11'
            ]
        ]
    ];

    print_r($kategoriler);
    echo $kategoriler['siteler']['e-ticaret'][1];

?>