<?php
include_once 'db.php';
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
        <h2>Vegetables</h2>
		  
       
    <style scoped="">
        .button-success,
        .button-error,
        .button-warning,
        .button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65);
            /* this is a green */
        }

        .button-error {
            background: rgb(202, 60, 60);
            /* this is a maroon */
        }

        .button-warning {
            background: rgb(223, 117, 20);
            /* this is an orange */
        }

        .button-secondary {
            background: rgb(66, 184, 221);
            /* this is a light blue */
        }
    </style>
		  <a href="#"><button class="button-success pure-button">A-E</button></a>
		  <a href="#"><button class="button-warning pure-button">F-J</button></a>
		  <a href="#"><button class="button-warning pure-button" >K-O</button></a>
		  <a href="#"><button class="button-warning pure-button">P-T</button></a>
		  <a href="#"><button class="button-warning pure-button">U-Z</button></a>
    

      </div>
      <div class="portfolio-wrapper clearfix">
        <!--<a class="each-portfolio" data-fancybox="gallery" href="images/p-two.jpeg">-->
			<div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/Arrowroot.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Arrowroot</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=1"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
        <!--</a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-three.jpeg">-->
			<div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/beetroot.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Beetroot</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=2"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal </p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
		  
		  <div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/bitter_gourds.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Bitter Gourds</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=3"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
       <!-- </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-four.jpeg">-->
			<div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/Bottle_gourd.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Bottle Gourd</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=4"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
		  
		  <div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/broccoli.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Brocoli</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=5"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
       <!-- </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-four.jpeg">-->
			<div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/cabbage.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Cabbage</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=6"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
             <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
		  
		  <div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/capsicum.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Capsicum</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=7"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
       <!-- </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-four.jpeg">-->
			<div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/carrots.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Carrots</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=8"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
       <!-- </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-four.jpeg">-->
			<div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/cauliflower.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Cauliflower</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=9"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
        <!--</a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-five.jpeg">-->
			<div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/celery.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Celery</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=10"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
             <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
        <!--</a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-six.jpeg">-->
			<div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/cluster_beans.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Cluster Beans</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=11"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
			</div>
       <!-- </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-three.jpeg">-->
		  <div class="each-portfolio">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="veg_img/corinder_leaf.jpg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Corinder Leaf</h5>
              <p class="p-desc"><?php $result=mysqli_query($conn,"SELECT Price FROM vegetable WHERE v_id=12"); $row=mysqli_fetch_row($result);  ?>Rupee: <?php echo $row[0]; ?>/- per quintal</p>
              <!--<span class="zoom"><i class="fa fa-search-plus"></i></span>-->
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  
  
  
</body>

</html>