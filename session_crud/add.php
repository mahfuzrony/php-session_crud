<?php
include_once('lib/library.php');
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
    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
    <fieldset>
        <legend><h1>Student Registration Form</h1></legend>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group has-success">
                <label class="control-label" for="fname">First name: </label>
                <input type="text" class="form-control" id="fname" aria-describedby="inputSuccess4Status" name="fname">
            </div>

            <div class="form-group has-success">
                <label class="control-label" for="lname">Last name: </label>
                <input type="text" class="form-control" id="lname" aria-describedby="inputSuccess4Status" name="lname">
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="Submit" name="submit">

<?php
if (array_key_exists('student', $_SESSION)){
    ?>

    <a class="btn btn-primary" href="list.php" role="button">View all students</a>

<?php
}

?>

            </div>

        </form>
    </fieldset>


<?php
if (isset($_POST['submit'])) {

    $first_name = filter_post_data($_POST['fname']);
    $last_name = filter_post_data($_POST['lname']);
    add_item_to_session($first_name, $last_name);

    header('Location:'.WWW_PATH.'/list.php');
}

?>

</div>
</div>

</body>
</html>