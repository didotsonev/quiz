<?php

$quotes = [
    'test' => 'Ivan',
    'check' => 'Petar',
];

foreach ($quotes as $key => $quote) {
    echo '<p>'. $key .' '. $quote .'</p>';
}

echo '<p>-------------------</p>';

$quotes2 = [
    '0' => [
        'author' => 'Ivan',
        'quote' => 'test'
    ],
    '1' => [
        'author' => 'Petar',
        'quote' => 'check',
        'year' => '1900'
    ],
];

foreach ($quotes2 as $key => $value) {
    echo '<p>'. $key .'</p>';
    echo '<p>'. $value['author'] . ' - ' . $value['quote'] .'</p>';
}
echo '<p>-------------------</p>';

foreach ($quotes2 as $key => $value) {
    foreach ($value as $item) {
        echo '<p>'. $item  .'</p>';
    }
}
