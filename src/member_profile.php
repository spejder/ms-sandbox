<?php

use Ripcord\Ripcord;

require(__DIR__ . '/../vendor/autoload.php');
include(__DIR__ . '/common.php');

$models = ripcord::client($settings['endpoint_object']);
$result = $models->execute_kw($settings['db'], $settings['uid'], $settings['password'],
  'member.profile', 'search_read',
  array(),
  array(
    'fields' => array(
      'display_name',
      'member_number',
      'functions_text',
      'relation_all_member_ids',
    ),
    'limit' => 100,
    'offset' => 0,
  )
);

print_records($result);
