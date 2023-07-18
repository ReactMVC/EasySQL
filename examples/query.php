<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

// Define the SQL query and bindings
$sql = "SELECT * FROM customers WHERE country = ?";
$bindings = array('USA');

// Run the query and output the results
$results = $db->query($sql, $bindings);
foreach ($results as $row) {
    echo "Name: {$row['name']}, Age: {$row['age']}, Email: {$row['email']}<br>";
}