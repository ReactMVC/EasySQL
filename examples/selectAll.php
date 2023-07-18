<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

$users = $db->select('users');
foreach ($users as $user) {
    echo $user['id'] . ': ' . $user['name'] . ' - ' . $user['email'] . '<br>';
}