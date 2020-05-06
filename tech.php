<?php
include_once "db.php";
$query="SELECT * FROM `techno` ORDER BY t_id DESC";
$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
	
</head>

<body id="page-top">
  <!-- Navigation -->
  <div class="logo">
    <!--<i class="fa fa-plane" aria-hidden="true"><span>Travel</span></i>-->
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
        <h2>Modern Farming Technology</h2>
		  
       
    <style>
		#box {
  		position: absolute;
 	    width: 320px;
        padding: 10px;
        border: 5px ;
        margin: 2px;
      }
        
    </style>
		  

      </div>
      <div class="portfolio-wrapper clearfix">
        <!--<a class="each-portfolio" data-fancybox="gallery">-->
			<?php 
		 	 	while($row=mysqli_fetch_assoc($result))
				{ ?>
		  <div class="each-portfolio">
          <div class="content hover-cont-wrap">
           <!-- <div class="content-overlay"></div>--> 
			  
			  <iframe width="100%" height="100%" src=<?php echo $row['v_link']; ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			  
			  <box><?php echo $row["v_desc"];?></box>
			  <!--<a><video class="content-video" src="https://youtu.be/X-p4P0SQytM"> -->
             <!--<div class="content-details fadeIn-bottom">
				<h5 class="p-title"></h5> -->
             
             </div>
		  </div>
		  
		  <?php } ?>
		     
       
		  
        
</div>
  </section>
  
 
</body>

</html>
