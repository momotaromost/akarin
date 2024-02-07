<?php
include('condb.php');
$c_ipadr=$_SERVER['REMOTE_ADDR'];


$sqlc = "INSERT INTO tbl_counter
	(c_ipadr)
	VALUES
	('$c_ipadr')";
	$resultc = mysqli_query($conn, $sqlc) or die ("Error in query: $sqlc " . mysqli_error());

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
  </head>