<?php
require_once 'EasySQL.php';

$db = new EasySQL('localhost', 'Easy', 'root', '123456');

// Set up pagination parameters
$perPage = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $perPage;

// Define the conditions and options for the query
$conditions = array();
$options = array(
    'LIMIT' => "$offset, $perPage"
);

// Perform the query and retrieve the results
$results = $db->select('users', '*', $conditions, $options);

// Count the total number of results
$totalResults = count($db->select('users'));

// Calculate the total number of pages
$totalPages = ceil($totalResults / $perPage);

// Output the results and pagination links
foreach ($results as $result) {
    echo $result['id'] . ': ' . $result['name'] . '<br>';
}

echo '<br>';

if ($totalPages > 1) {
    echo 'Pages: ';
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $page) {
            echo "$i ";
        } else {
            echo "<a href=\"?page=$i\">$i</a> ";
        }
    }
}