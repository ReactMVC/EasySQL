<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

// Get the row with ID 4 from the users table
$row = $db->get('users', 4);

// Output the values of the row
echo "Name: {$row['name']}, Email: {$row['email']}";