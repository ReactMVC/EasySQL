<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

$options = array(
    'LIMIT' => '2'
);

$results = $db->select('users', '*', array(), $options);

print_r($results);