<?php
include_once('lib/library.php');


$student = get_student_detail($_GET['i']);
// $index = $_GET['i'];
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
     First name: <strong class="text-primary"><?php echo htmlspecialchars($student['fname']); ?></strong>
    <br>
     Last name: <strong class="text-primary"> <?php echo htmlspecialchars($student['lname']); ?></strong>

<br><br>

    <a class="btn btn-primary" href="list.php" role="button">View all students</a>


    <a class="btn btn-primary" href="add.php" role="button">Add more records</a>

            </div>
        </div>
    </div>
</body>