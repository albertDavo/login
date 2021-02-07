<?php
$connect_to_db = new mysqli('localhost', 'root', '', 'test');
if ($connect_to_db ->connect_errno) {
    echo "Failed to connect to MySQL: " . $connect_to_db->connect_error;
    exit();
}
// String maker for storing in db
function for_sql($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
