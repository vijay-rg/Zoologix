<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Zoo Management System | Animal Detail</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--lightbox-->
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<script src="js/jquery.lightbox.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
<!--lightbox-->
</head>
<body>
<?php include_once('includes/header.php');?>
		<div class="banner-header">
			<div class="container">
				<h2>Adoption Detail</h2>
			</div>
			</div>
	<div class="content">
	<!--gallery-->
			<div class="gallery-section">
					<div class="container">
					<div class="welcome-grid">
				
				<div class="col-md-8">
					<div>
						<?php 
						$anid=$_GET['anid'];
 $query=mysqli_query($con,"select * from tblanimal where ID='$anid'");
 while ($row=mysqli_fetch_array($query)) {
 ?>
						<img src="admin/images/<?php echo $row['AnimalImage'];?>" alt=" " class="img-responsive" width="50" height="50"/>
<h4 style="padding-top: 20px"><?php echo $row['AnimalName'];?></h4>

<strong style="padding-top: 20px">Breed: <?php echo $row['Breed'];?></strong><br>
<strong style="padding-top: 20px">Adopter Name : ABC</strong><br>
<strong style="padding-top: 20px">Adopter Details: abc@gmail.com 9797979898</strong>
					<?php }?>
					</div>	
				</div>
				
				<div class="clearfix"> </div>
			</div>
	
		</div>
	</div>
<!--gallery-->
<!--specials-->
		<?php include_once('includes/special.php');?>
			</div>
		<?php include_once('includes/footer.php');?>
</body>
</html>