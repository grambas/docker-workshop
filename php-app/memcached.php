<?php

$memcache = new Memcached();
$memcache->addServer("memcached_test", 11211);

if (isset($_GET['set'])) {
    $memcache->set("test", $_GET['set']);
}

echo 'current test value: ';
var_dump($memcache->get('test'));
