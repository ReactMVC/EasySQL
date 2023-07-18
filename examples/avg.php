<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

// Define the WHERE clause and bindings
$where = 'country = ?';
$bindings = array('USA');

// Calculate the average and output it
$avg = $db->avg('customers', 'age', $where, $bindings);
echo "The average age of customers from the USA is $avg";