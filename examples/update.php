<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

// Define the data to be updated and the WHERE clause
$data = array(
    'name' => 'John Doe',
    'email' => 'johndoe@example.com'
);
$where = 'id = ?';
$bindings = array(1);

// Perform the update and check if it was successful
$result = $db->update('users', $data, $where, $bindings);
if ($result) {
    echo 'Update successful';
} else {
    echo 'Update failed';
}