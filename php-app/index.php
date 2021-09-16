<?php

$data = [
    'status' => 'ok',
    'time' => date("Y/m/d H:i:s"),
    'burn_test' => 'localhost:8061?burn_test',
    'memcached_version' => phpversion('memcached'),
];

if (isset($_GET['burn_test'])) {
    $a = 0;
    for($i = 0; $i < 100000000000; $i++) {
        $a += $i;
    }
}

header('Content-Type: application/json');
echo json_encode($data);
