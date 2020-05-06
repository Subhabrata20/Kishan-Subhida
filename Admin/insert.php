<?php

 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$vid =$_REQUEST['vid'];
$name =$_REQUEST['name'];
$price = $_REQUEST['price'];

$query = "INSERT into `vegetable` (v_id, Name, Price) VALUES ('$vid','".$name."', '".$price."')";
$result = mysqli_query($con,$query);
        if($result){
            $status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
        }
    }else{

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="vid" placeholder="Enter ID" required /></p>
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="price" placeholder="Enter Price" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
