<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');
$data = array(
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'password' => 'mypass'
);
$result = $db->insert('users', $data);
if ($result) {
    echo 'New user added successfully.';
} else {
    echo 'Error adding new user.';
}