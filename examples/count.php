<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

// Define the WHERE clause and bindings
$where = 'id = ?';
$bindings = array('1');

// Get the count and output it
$count = $db->count('users', $where, $bindings);
echo "There are $count active users";