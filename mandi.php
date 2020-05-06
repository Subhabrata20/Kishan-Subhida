<?php
include_once 'db.php';

/*function filterTable($query)
{
	

    $connect = mysqli_connect("localhost", "root", "", "ksn");
    $filter_Result = mysqli_query($connect , $query);
    return $filter_Result;
}*/

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    
	
	$query = "SELECT * FROM `mandi` WHERE `m_name` LIKE '".$valueToSearch."%' OR `dist` LIKE '".$valueToSearch."%'" ;
	$search_result=mysqli_query($conn,$query);
	
    //$search_result = filterTable($query);
	
    
}

 else {
    $query = "SELECT * FROM `mandi`";
	 $search_result=mysqli_query($conn,$query);
    //$search_result = filterTable($query);
	 
}

// function to connect and execute the query


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Kishan</title>
  <!--stylesheet-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
  <link href="styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">
  <!--scripts-->
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/all-plugins.js"></script>
  <script type="text/javascript" src="scripts/plugins-activate.js"></script>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>

<body id="page-top">
  <!-- Navigation -->
  <div class="logo">
    
  </div>
  <a class="menu-toggle rounded" href="#">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="smooth-scroll" href="#Header"></a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#">H</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#">A</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#">S</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#">P</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#">T</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#">C</a>
      </li>
    </ul>
  </nav>
  
  </section>
	
  <section class="content-section text-center" id="Portfolio">
    <div class="container">
      <div class="block-heading">
        <h2>Mandi</h2>
		  
       
   

      </div>
		<div class="container">
  
  <form action="" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="valueToSearch">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit" name="search"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
</div>
		</br>
		
		
      <div class="portfolio-wrapper clearfix">
		  
		 
		  <?php  
		  while($row = mysqli_fetch_assoc($search_result)){?>
        <!--<a class="each-portfolio" data-fancybox="gallery" href="images/p-two.jpeg">-->
			<div class="each-portfolio">
				
          <div class="content hover-cont-wrap">
            <!--<div class="content-overlay"></div>-->
			 <div class="panel panel-default">
				  
 			 	<div class="panel-heading"><?php echo $row["m_name"]; ?></div>
				 <div class="panel-body">Owner Name: <?php echo $row["o_name"]; ?></div>
				 <div class="panel-body">District: <?php echo $row["dist"]; ?></div>
				 <div class="panel-body">Mobile No: <?php echo $row["mobile"]; ?></div>
  					
			</div>
           
		</div>
			</div>
		  <?php } ?>
       
			
      
    </div>
  </section>
  
  
  
</body>

</html>