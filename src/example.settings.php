<?php
// Update the following two variables.
$settings['username'] = '1234567'; // member number
// If you don't know your uid, fill out the username and then use authenticate
// to retrive the user-id.
$settings['uid'] = (int)'1234';
$settings['password'] = 'secret';

$settings['url'] = 'https://mskursus.dds.dk';
$settings['db'] = 'ddskursus';
$settings['endpoint_object'] = $settings['url'] . '/xmlrpc/2/object';
$settings['endpoint_common'] = $settings['url'] . '/xmlrpc/2/common';
