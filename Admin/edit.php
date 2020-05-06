<?php

 
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from vegetable where v_id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];


$price =$_REQUEST['price'];

$update="update vegetable set Price='".$price."' where v_id='".$id."'";
	
	$result = mysqli_query($con,$update);
        if($result){
            $status = "Record Update Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
			echo '<p style="color:#FF0000;">'.$status.'</p>';
        }
    }else{
		
}
 {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['v_id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['Name'];?>"  disabled/></p>
<p><input type="text" name="price" placeholder="Enter Price" required value="<?php echo $row['Price'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
