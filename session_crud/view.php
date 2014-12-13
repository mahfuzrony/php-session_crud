<?php
include_once('lib/library.php');

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];

add_item_to_session($first_name, $last_name);

?>
<a href="list.php">Check out the List.</a>
