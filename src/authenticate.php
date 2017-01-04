<?php

use Ripcord\Ripcord;

require(__DIR__ . '/../vendor/autoload.php');
include(__DIR__ . '/settings.php');

$common = ripcord::client($settings['endpoint_common']);
$uid = $common->authenticate($settings['db'], $settings['uid'], $settings['password'], array());

print_r($uid);

