<?php

use Ripcord\Ripcord;

require(__DIR__ . '/../vendor/autoload.php');
include(__DIR__ . '/settings.php');

$models = ripcord::client($settings['endpoint_object']);
$result = $models->execute_kw($settings['db'], $settings['uid'], $settings['password'],
  'member.organization', 'search_read',
  array(),
  array('fields' => array('display_name', 'email', 'organization_meeting_and_member_description', 'leader_ids', 'leader_txt'), 'limit' => 5)
);

foreach ($result as $record) {
  $record['leader_ids'] = implode(', ', $record['leader_ids']);
  print("{$record['display_name']}\n");
  print(str_repeat('-', strlen($record['display_name'])) . "\n");
  unset($record['display_name']);
  foreach ($record as $key => $value) {
    print("{$key}: $value\n");
  }
}

//print_r($result);

