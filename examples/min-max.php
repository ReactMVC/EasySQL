<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

// Define the WHERE clause and bindings
$where = 'name = ?';
$bindings = array('John Doe');

// Find the minimum id and output it
$minID = $db->min('users', 'id', $where, $bindings);
echo "The minimum id of John Doe name is $minID <br />";

// Find the maximum id and output it
$maxID = $db->max('users', 'id', $where, $bindings);
echo "The maximum id of John Doe name is $maxID";