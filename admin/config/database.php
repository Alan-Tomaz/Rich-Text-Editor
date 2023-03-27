<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/Rich Text Editor/admin/config/constants.php';

//connect to database
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_errno($connection)) {
    die(mysqli_error($connection));
}
