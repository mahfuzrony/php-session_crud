<?php
include_once('lib/library.php');
// echo '<pre>';
// print_r ($_SESSION);
// echo '</pre>';

$length = count($_SESSION['student']);
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
    <div class="col-xs-12xs col-sm-12 col-md-6 col-lg-6">
        <h1 class="text-center">Students List!</h1>
        <div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th class="info">Serial no.</th>
		<th class="info">First Name</th>
		<th class="info">Last Name</th>
		<th class="info">Action</th>
	</tr>
<?php
for($i=0; $i<$length; $i++ ){

?>
	<tr>
		<td><?php echo $i+1 ;?></td>
		<td><?php echo htmlspecialchars($_SESSION['student'][$i]['fname']);?></td>
		<td><?php echo htmlspecialchars($_SESSION['student'][$i]['lname']);?></td>
		<td><a href="show.php?i=<?php echo $i;?>">Show</a> |
			<a href="edit.php?i=<?php echo $i;?>">Edit</a> | 
			<a href="delete.php?i=<?php echo $i;?>">Delete</a>
		</td>
	</tr>

<?php
} 			//$_SESSION['student'][$i]['fname']
?>
</table>
            </div>
</div>
    <div class="col-xs-12xs col-sm-12 col-md-6 col-lg-6"

    <fieldset>
        <legend><h2>Student Registration</h2></legend>
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
</div>
</body>