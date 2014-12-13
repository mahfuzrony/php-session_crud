<?php
include_once('lib/library.php');
$student = get_student_detail($_GET['i']);
/*
// $index = $_GET['i'];
 //$_SESSION['edit_index'] = $index;

function get_student_detail($index){
    $student = array('fname'=> $_SESSION['student'][$index]['fname'],
                        'lname'=> $_SESSION['student'][$index]['lname']);

    return $student;

}

$student = get_student_detail($_GET['i']);

 ?>

<?php

if (isset($_POST['submit'])){
	echo 'Hallo world';

	if (isset($_POST['ffname'])&&($_POST['llname'])){
		$new_fname = $_POST['ffname'];
		$new_lname = $_POST['llname'];
			if(!array_key_exists('student', $_SESSION)){
			$_SESSION['student'] = array();
			}

	//	$_SESSION['student'][$index]= $new_fname;
	//	$_SESSION['student'][$index]= $new_lname;

		echo '<pre>';
		print_r ($_SESSION);
		echo '</pre>';

		// header('location:http://localhost/basis/anothersession/list.php');
	}
}else{
*/
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Student registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

    <fieldset>
        <legend><h2>Student Registration <small>edit mode!</small></h2></legend>
        <form action="submit_edit.php" method="POST">
            <div class="form-group has-success">
                <label class="control-label" for="fname">First name: </label>
                <input type="text" class="form-control" id="fname" aria-describedby="inputSuccess4Status"
                       name="fname"value="<?php echo htmlspecialchars($student['fname']);?>">
            </div>

            <div class="form-group has-success">
                <label class="control-label" for="lname">Last name: </label>
                <input type="text" class="form-control" id="lname" aria-describedby="inputSuccess4Status"
                       name="lname" value="<?php echo htmlspecialchars($student['lname']);?>">
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="Submit" name="submit">
                <a class="btn btn-primary" href="list.php" role="button">View all students</a>

            </div>
            <input type="hidden" name="id" value='<?php echo $_GET['i'];?>'>

        </form>
    </fieldset>

            </div>
        </div>
    </div>
</body>