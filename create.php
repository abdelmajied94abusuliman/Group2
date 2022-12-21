<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
}
$query = "INSERT INTO employees (name, address, salary) VALUES 
(1, 'Abdelmajied', 'aqaba', 3000),
(2, 'asem', 'aqaba', 8000),
(3, 'shaimaa', 'aqaba', 5000)";

