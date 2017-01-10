<?php

use Ripcord\Ripcord;

require(__DIR__ . '/../vendor/autoload.php');
include(__DIR__ . '/common.php');

$common = ripcord::client($settings['endpoint_common']);
$uid = $common->authenticate($settings['db'], $settings['username'], $settings['password'], array());
print("User ID: {$uid}\n");

