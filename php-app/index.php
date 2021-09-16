<?php

$data = [
    'status' => 'ok',
    'time' => date("Y/m/d H:m:s"),
    'burn_test' => 'localhost:8061?burn_test',
];

if (isset($_GET['burn_test'])) {
    $a = 0;
    for($i = 0; $i < 100000000000; $i++) {
        $a += $i;
    }
}

header('Content-Type: application/json');
echo json_encode($data);
