<?php

use Ripcord\Ripcord;

require(__DIR__ . '/../vendor/autoload.php');
include(__DIR__ . '/common.php');

$models = ripcord::client($settings['endpoint_object']);
$result = $models->execute_kw($settings['db'], $settings['uid'], $settings['password'],
  'member.organization', 'search_read',
  array(),
  array(
    'fields' => array(
      'display_name',
      'email',
      'organization_meeting_and_member_description',
      'leader_ids',
      'leader_txt',
    ),
    'limit' => 100,
    'offset' => 0,
  )
);

print_records($result);
