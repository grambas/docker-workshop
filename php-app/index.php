<?php

$data = [
    'status' => 'ok',
    'time' => date("Y/m/d H:m:s"),
    'memcached_version' => phpversion('memcached'),
];

if (isset($_GET['test'])) {
    $a = 0;
    for($i = 0; $i < 100000000000; $i++) {
        $a += $i;
    }
}

header('Content-Type: application/json');
echo json_encode($data);
