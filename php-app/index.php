<?php

$data = [
    'status' => 'ok',
    'time' => date("Y/m/d H:m:s"),
];

header('Content-Type: application/json');
echo json_encode($data);
