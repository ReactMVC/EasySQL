<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

// Define the WHERE clause and bindings
$where = 'id = ?';
$bindings = array(1);

// Perform the delete and check if it was successful
$result = $db->delete('users', $where, $bindings);
if ($result) {
    echo 'Delete successful';
} else {
    echo 'Delete failed';
}