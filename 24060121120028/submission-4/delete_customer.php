<?php
require_once('./lib/db_login.php');
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM customers WHERE customerid = $id";
    $result = $db->query($query);
    
    if (!$result) {
        die("Could not query the database: <br />" . $db->error . "<br>Query: " . $query);
    } else {
        header('Location: view_customer.php');
        exit();
    }
}
$db->close();
?>