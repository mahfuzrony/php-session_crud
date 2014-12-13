<?php
include_once('lib/library.php');
$index = $_GET['i'];

unset($_SESSION['student'][$index]);
$_SESSION['student']= array_values($_SESSION['student']);
echo '<pre>';
print_r ($_SESSION['student']);
echo '</pre>';
header('Location:http://localhost/basis/session_crud/list.php');
?>
<a href='list.php'>List</a>