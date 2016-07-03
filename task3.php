<?php
session_start();
$username=$_SESSION['var'];



$conn =mysqli_connect("localhost","utkarsh","utkarsh","utkarsh") or die(mysqli_connect_error());



$rows=mysqli_query($conn,"delete from utkarsh where username='$username'")or die(mysqli_error($conn));

header('location:list.php');

?>