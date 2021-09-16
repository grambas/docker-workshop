<?php

$memcache = new Memcached();
$memcache->addServer("memcached_test", 11211);

if (isset($_GET['set'])) {
    $set = $memcache->set("test", $_GET['set']);
    echo sprintf('set success? %s <br>', var_export($set, true));
}

echo 'current test value: ';
var_dump($memcache->get('test'));
