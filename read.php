<?php
// Include the config file
include_once 'config.php';

// Prepare a SELECT statement
$sql = "SELECT id, name, address, salary FROM table_employees";
$stmt = $conn->prepare($sql);

// Execute the statement
$stmt->execute();

// Fetch the results
$table_employees = $stmt->fetchAll();

// Close the statement
$stmt->closeCursor();

// Loop through the employees and display them in a table
echo '<table>';
echo '<tr><th>ID</th><th>Full Name</th><th>Address</th><th>Salary</th><th>Actions</th></tr>';
foreach ($table_employees as $employee) {
  echo '<tr>';
  echo '<td>' . $employee['Id'] . '</td>';
  echo '<td>' . $employee['name'] . '</td>';
  echo '<td>' . $employee['Address'] . '</td>';
  echo '<td>' . $employee['Salary'] . '</td>';
  echo '<td>';
  // Add buttons for viewing, updating, and deleting the employee
  echo '<a href="read.php?id=' . $employee['Id'] . '">View</a> ';
  echo '<a href="update.php?id=' . $employee['Id'];
}