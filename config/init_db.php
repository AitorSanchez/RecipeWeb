<?php

define('DB_NAME', 'recetarium');
define('DB_USER', 'root');
define('DB_PASSWORD', '12345');
define('DB_HOST', 'localhost');

// Create connection
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}