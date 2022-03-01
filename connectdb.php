<?php
$conn = new mysqli('localhost','root','','ipldatabase');

if ($conn->connect_error) {
   die("Error: There is something error".$conn->connect_error);
}
?>