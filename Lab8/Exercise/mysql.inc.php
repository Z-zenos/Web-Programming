<?php

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

# Load init file
$ini = parse_ini_file('app.ini');

$conn = new mysqli;

# Connect to database
@ $conn->connect(
  $ini['db_hostname'],
  $ini['db_user'],
  $ini['db_password'],
  $ini['db_database'],
);
