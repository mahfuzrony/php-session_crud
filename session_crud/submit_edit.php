<?php
include_once('lib/library.php');
//$index = $_GET['i'];
//$edit_index = $_GET['edit_index'];

edit_item_to_session($new_fname, $new_lname, $index);


echo '<pre>';
print_r($_SESSION);
echo '</pre>';

header('Location:'.WWW_PATH.'/list.php');
?>