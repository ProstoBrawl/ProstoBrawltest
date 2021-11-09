<?php
$mysqli = new mysqli("localhost", "bomj3326_ghoulstars", "zxc666", "bomj3326_ghoulstars");
if (mysqli_connect_errno()) {
    printf("Connection Error: %s\n", mysqli_connect_error());
    exit();
}

$result = $mysqli->query("SELECT * FROM `settings`")->fetch_array();
$currentversion=$result[0];

?>