<?php

	session_start();
	
	
	if(!isset($_SESSION['username']) && $_SESSION['member_id'] == ''){
		header('location:index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Accounts a Corporate Category Bootstrap Responsive Website Template | About :: W3layouts</title>
	<!-- Meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Accounts Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- //Bootstrap Css -->
	<link href="css/font-awesome.css" rel="stylesheet"><!-- //Font-awesome Css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- //Required Css -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->

</head>

<body>
	<!--Slider-->
	<div class="inner-bnr">
	
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="w3l_header_left">
					<ul>
						<li><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
				</div>
				<div class="w3l_header_right">
					<div class="w3ls-social-icons">
						<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
						<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
						<a class="pinterest" href="#"><span class="fa fa-pinterest-p"></span></a>
						<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<!-- //header -->
		<div class="header-bottom">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
						<div class="logo">
							<h1><a class="navbar-brand" href="index.html"><span>A</span>ccounts</a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-1" id="cl-effect-1">
							<ul class="nav navbar-nav">
								<!-- <li><a href="index.html" data-hover="Home">Home</a></li>
								<li class="active"><a href="about.html" data-hover="About">About</a></li>
								
								<li><a href="projects.html" data-hover="Categories">Projects</a></li>
								<li><a href="contact.html" data-hover="Contact">Contact</a></li> -->
								<li class="dropdown menu__item">
									<a href="#" class="dropdown-toggle menu__link active" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true"
									    aria-expanded="false"><?php echo $_SESSION['username']?><span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="">My Profile</a></li>
										<li><a href="" data-toggle="modal" data-target="#logout_modal">Logout</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>

	<!-- Logout modal  -->
	 <div class="modal fade" id="logout_modal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">Are You Sure ?</h5>
        </div>
        <div class="modal-body">
          <h6>Welcome Back <?php echo $_SESSION['username'];?></h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="logout.php"> <button type="button" class="btn btn-danger" >Logout</button> </a> 
        </div>
      </div>
    </div>
  </div>

	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Accounts</h4>
					<img src="images/g10.jpg" alt=" " class="img-responsive">
					
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
						book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!--//Header-->
		<!-- about inner -->
<div class="about-bottom inner-padding">
	<div class="container">
		
				<h3 class="title-txt">Be A Donor </h3>
				<div class="about-bott-right">
					 <h5>Who We Are</h5>
					 <p>Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure reprehend.Unicmquam eius, Basmodi temurer sehsMunim.Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure reprehend.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
</div>
<!-- listed Here -->
<div class="row">
				<form action="add_request_post.php" method="post" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Patient Name</label>
								<input type="text" name="pateintname" placeholder="Enter Patient Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Gender</label>
								<select  class="form-control" name="gender">
								<option value="">Select</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
							</div>
						</div>					
							
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Blood Group</label>
								<select  class="form-control" name="bloodgroup">
								<option> Select </option>
								<?php
								$select = $connection->query("SELECT * FROM blood_group");
								while ($row=$select->fetch_array()) { ?>
								<option value="<?php echo $row['blood_id']?>"><?php echo $row['blood_group']?></option>
								 <?php }
								?>
									
								</select>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Unit Of Blood</label>
								<input type="text" name="unit" placeholder="Enter Unit Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Date</label>
								<input type="text" name="date" placeholder="Enter Date Here.." class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Hospital Name</label>
								<input type="text" name="hospital" placeholder="Enter Hospital Here.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Contact</label>
								<input type="text" name="contact" placeholder="Enter Contact Name Here.." class="form-control">
							</div>	
						</div>						
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" placeholder="Enter Email Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Contact Number</label>
						<input type="text" name="contactnumber" placeholder="Enter Email Address Here.." class="form-control">
					</div>	
					<div class="form-group">
						<label>Adress</label>
						<textarea type="text" name="address" placeholder="Enter Address Here.." class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Reason</label>
						<textarea type="text" name="reason" placeholder="Enter Reason Here.." class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control">
					</div>
					<button type="submit" class="btn btn-info">Post</button>					
					</div>
				</form> 
				</div>
<div class="team">
	<div class="container">
		<h3 class="title-txt">Recent Donor</h3>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid">
					<div class="view view-sixth">
						<img src="images/te1.jpg" alt=" " class="img-responsive">
						<div class="mask">
							
							<div class="w3ls-social-icons">
								<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
								<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
								<a class="pinterest" href="#"><span class="fa fa-pinterest-p"></span></a>
							</div>
						</div>
					</div>
					<h4>Daniel</h4>
					<p>Tax Advisor</p>
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
	<!-- //Team -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Latest Tweets</h3>
					<ul class="agile_footer_grid_list">
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Nam libero tempore, cum soluta nobis est eligendi optio 
							cumque nihil impedit. <span>1 day ago</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus <a href="mailto:info@mail.com">info@mail.com</a>
							cumque nihil impedit. <span>2 days ago</span></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="about.html">About</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="projects.html">Projects</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h2>Latest Works</h2>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/g1.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/g2.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/g3.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/g4.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/g5.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/g6.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_newsletter_footer_grids">
				<div class="w3_newsletter_footer_grid_left">
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="submit" value="Send">
					</form>
				</div>
				
				
			</div>
		
			<div class="agileinfo_copyright">
				<p>© 2018 Accounts. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>



