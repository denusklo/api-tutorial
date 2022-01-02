<?php
require __DIR__ . '/../public/index.php';
$person = [
    'first_name' => 'Sean',
    'last_name' => 'Pooley',
];
echo (json_encode($person));
