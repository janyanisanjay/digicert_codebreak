<?php
                                        require_once("db.php");
//                                        session_start();
?>
<html>

<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	
	<link rel="stylesheet" href="vendor/animate/animate.css">

	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<!-- Start WOWSlider.com HEAD section -->
	<!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="vendor/engine2/style.css" />
	<script type="text/javascript" src="vendor/engine2/jquery.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="toastr.min.css">

	<!-- End WOWSlider.com HEAD section -->
	<style>
		/* Tabs*/

		section {
			padding: 60px 0;
		}

		section .section-title {
			text-align: center;

			margin-bottom: 50px;
			text-transform: uppercase;
		}

		#tabs {

			color: #B0413E;
		}

		#tabs h6.section-title {
			color: #B0413E;
		}

		#tabs .nav-tabs .nav-item.show .nav-link,
		.nav-tabs .nav-link.active {
			color: #B0413E;
			background-color: transparent;
			border-color: transparent transparent #B0413E;
			border-bottom: 4px solid !important;
			font-size: 20px;
			font-weight: bold;
		}

		#tabs .nav-tabs .nav-link {
			border: 1px solid transparent;
			border-top-left-radius: .25rem;
			border-top-right-radius: .25rem;
			color: #B0413E;
			font-size: 20px;
		}

		footer {
			background-color: #4E5B6F;
			padding-top: 30px;
			border-top: 5px solid rgba(0, 0, 0, 0.1);
		}

		footer p {
			font-size: 16px;
			font-weight: 300;
		}

		.contact-left h3,
		.contact-right h3 {
			color:#fff;
			font-size: 28px;
			font-weight: 700;
		}



		.contact-left p {
			color: #fff;
			margin-bottom: 30px;
		}


		.contact-info {
			background: url("../../assets/images/world-map.png") no-repeat;
			background-size: contain;
		}

		address {
			color: #fff;
		}

		address strong,
		phone-fax-email strong {
			font-size: 16px;
			letter-spacing: 1px;
		}

		.form-control {
			background-color: transparent;
			border-radius: 0;
			color: #fff;
			font-size: 16px;
			font-weight: 300;
			border-color: #fff;
			margin-bottom: 20px;
			padding: 8px 15px;
		}

		.btn-general {
			border: solid 2px #fff;
			border-radius: 0;
			padding: 12px 26px;
			text-transform: uppercase;
			/*    font-weight: bold;*/
		}

		.btn-white {
			color: #fff;
			border-color: #fff;
		}

		.btn-white:hover,
		.btn-white:focus {
			background: #fff;
			color: #4E5B6F;
		}

		/*Image Hovering*/

		.image-hovering {
			position: relative;
			display: inline-block;
			border-radius: 50px;

		}

		.image-hovering .hover {
			position: absolute;
			bottom: 20px;
			margin: 0;
			color: #4E5B6F;
			;
			text-align: center;
			background: #4E5B6F;
			background: rgba(206, 229, 242, 0.8);
			width: 350px;
			height: 192px;
			line-height: 170px;
			padding: 15px;
			box-sizing: border-box;
			display: none;
			text-decoration: none;

		}

		.image-hovering:hover .hover {
			display: block;
		}


	</style>

</head>

<body style="margin:0;background-color:#f9f9f9">

	<nav class="navbar-light bg-light" style="margin-top:20px;margin-left:600px;font-size:16px;">
		<ul class="nav justify-content-center">
			<li class="nav-item">
				<a class="nav-link active bit_nav bit_nav1" href="#" style="color:#B0413E ">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="#contact" style="color:#B0413E ">Contact</a>
			</li>
           
            <li class="nav-item">
				<a class="nav-link active bit_nav" href="http://localhost/certificate/src/issues.php" style="color:#B0413E ">Issues</a>
			</li>
           <li class="nav-item">
				<a class="nav-link active bit_nav" href="http://localhost/certificate/src/history.php" style="color:#B0413E ">History</a>
			</li>
            <li class="nav-item ">
				<a class="logout btn bit_button" href="../classes/login/login.php" style="color:#fff;background-color:#b0413e; margin-top:5px;">Log Out</a>
			</li>


		</ul>
	</nav>
	<div class="container-fluid" style="margin-top: 80px;">
	   <h2 style="color:#b0413e;letter-spacing:3px;text-align:center;"> My Achievements</h2>
			<div style="width: 50px; height: 3px; background:#b0413e; margin: 0 auto 30px;"></div>
	</div>
<div class="container-fluid" style="padding-left:150px; margin-bottom: 40px;">
									<div class="row">
									<?php
//                                        $student_id = $_SESSION['student_id'];
//                                        echo $student_id;
                                        $email_id = $_GET['email_id'];
//                                        echo $email_id;
                                        $query = "SELECT * FROM student WHERE email_id=$email_id";
//                                        echo $query;
                                        ?>
									
										<div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:384;margin-right:100px;margin-top:30px;">
										
													<img src="images/certificate_templates/t1.png" alt="" style="width: 350px; height: 195px;">
										
									
											<div class="hover zoomIn">
												<a class="btn" href="<?php echo "http://localhost/certificate/src/t2.php?committe_id=e22tdhNdzu4=&student_id=o1Ey6g7KGTk=" ?>" style=" margin-top:65px; width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;">View</a>
											</div>
										</div>
										
										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-right:100px;margin-top:30px;">
											<img src="images/certificate_templates/t2.png" alt="">
											<div class="hover zoomIn">
												<a class="btn" href="<?php echo "http://localhost/certificate/src/t6.php"?>" style=" margin-top:65px;width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;" data->View</a>
											</div>
										</div>

										<div class="col-md-3 col-sm-4 image-hovering" style="height:214px;width:384;margin-top:30px;">
											<img src="images/certificate_templates/t4.png" style="width: 350px; height: 195px;" alt="">
											<div class="hover zoomIn">
												<a class="btn" href="<?php echo "http://localhost/certificate/src/t4.php?committe_id=e22tdhNdzu4=&student_id=o1Ey6g7KGTk=" ?>" style=" margin-top:65px; width:90px;height:40px;border:2px solid #313e50; background-color:rgba(206,229,242,0.5);letter-spacing:3px;" >View</a>
											</div>
										</div>
										

									</div>

									
    </div>

<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-left">
						<h3>DigiCerts</h3>
						<p>A place to </p>
						<div class="contact-info">
							<address>
                              <strong>Headquaters:</strong>
                              <p>313, Evergreen CHS.<br>
                              Airoli Sector 15,<br>
                              New Bombay,<br>
                              Mumbai - 55.
                              </p>
                          </address>
							<div class="phone-fax-email">
								<p>
									<strong>Phone:</strong> <span>(719)-778-8804</span>
									<br/>
									<strong>Fax:</strong> <span>(719)-778-8804 8890</span>
									<br/>
									<strong>Email:</strong> <span>info@whitegrapphics.in</span>
									<br/>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="contact-right">
						<h3>Contact Us</h3>
						<form action="#">
							<input type="text" name="full-name" placeholder="Full Name" class="form-control">
							<input type="email" name="email" placeholder="Email Address" class="form-control">
							<textarea name="message" rows="3" placeholder="Your Message..." class="form-control"></textarea>

							<div class="send-btn">
								<a href="#" class="btn btn-lg btn-general btn-white" role="button">Send</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</footer>
	
    

<script src="toastr.min.js"></script>
	<script type="text/javascript" src="vendor/engine2/wowslider.js"></script>
	<script type="text/javascript" src="vendor/engine2/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

<!--
    <script>
//        toastr["Info"]("You have successfully added Customer", "Customer Added")

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
        toastr["success"]("You have successfully Logged In","Committee Head");
        
    </script>
-->
    

</body>

</html>