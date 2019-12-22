<!--<!DOCTYPE html>-->
<?php
include_once("db.php");
//session_start();
//$organization_id = $_SESSION["organization_id"];
////$organization_id = 13;
//if(isset($_GET['a'])){
//
//$a=$_GET['a'];
//}
?>
<html lang="zxx" class="no-js">

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

    
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">


	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">


</head>
<style>
	.nav-item .logout:hover{
		background: #fff;
		border: 1px solid #b0413e;
		color: #b0413e;
	}
    .bit_nav1{
        margin-left: 290px;

    }
    .bit_nav{
    text-decoration: none;
    color:#B0413E;

    padding-right:45px;
    letter-spacing: 1px;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 20px;
    }
    .bit_nav:hover{
    color:#bd4642; 
    }

    .bit_button{
        text-decoration: none;
        color: #fff;width:90px;
        margin-left:25px;
        background-color:#bd4642;
        font-size: 16px;
        font-family: 'Nunito Sans', sans-serif;
        box-shadow: 1px 1px 5px #CEE5F2;
        border: none;
    }
    .bit_button:hover{
        color: #bd4642;
        background: #fff;
        border: 1px solid #bd4642;
    }
    .type{
       font-size:20px; 
        color: #fff;
        margin-top: 120px;
        margin-left: 25px;


    }
    footer {
			background-color: #313e50;
			padding-top: 30px;
			border-top: 5px solid rgba(0, 0, 0, 0.1);
		}

		footer p {
			font-size: 16px;
			font-weight: 300;
		}

		.contact-left h3,
		.contact-right h3 {
			color: #fff;
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
			color: #313e50;
			
		}

</style>

<body>


   <nav class="navbar-light bg-light" style="padding:20px;font-size:16px;">
	<div class="container-fluid">
		    <ul class="nav justify-content-end">
			<li class="nav-item">
				<a class="nav-link active bit_nav bit_nav1" href="#" style="color:#B0413E ">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="" style="color:#B0413E ">History</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="" style="color:#B0413E ">Profile</a>
                </li>
			<li class="nav-item ">
				<a class="logout btn bit_button" href="" style="color:#fff;background-color:#b0413e; margin-top:5px;">Logout</a>
			</li>


		</ul>
		</div>
	</nav>


	<!-- Start Banner Area -->
	<section class="" style="position:relative;">
		<img src="images/background.png" alt="" style="width:1700px">


		<div class="container-fluid" style="position: absolute;bottom:375px;right:200px; background-color:#f9f9f9;width:1100px;height:450px;overflow: scroll">
		<?php
//            if(isset($a)){
//              if($a==1)
//              {
                ?>
<!--
                <div class="alert alert-success alert-dismissible" style="margin-left:40px;margin-top:20px">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
-->
                  
              <?php
//              }
//            }
            ?>
			<div class="row">
			
			    
<!--
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-5" style="background-color:#CEE5F2;margin:30px 0px 0px 55px;height:100px">
					<p>hello hi</p>
				</div>
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-5" style="background-color:#CEE5F2;margin:30px 0px 0px 55px;height:100px ">
					<p>hello</p>
				</div>
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-5" style="background-color:#CEE5F2;margin:30px 0px 0px 55px;height:100px ">
					<p>hello</p>
				</div>
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-5" style="background-color:#CEE5F2;margin:30px 0px 0px 55px;height:100px ">
					<p>hello</p>
				</div>
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-5" style="background-color:#CEE5F2;margin:30px 0px 0px 55px;height:100px ">
					<p>hello</p>
				</div>
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-5" style="background-color:#CEE5F2;margin:30px 0px 0px 55px;height:100px ">
					<p>hello</p>
				</div>
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-5" style="background-color:#CEE5F2;margin:30px 0px 0px 55px;height:100px ">
					<p>hello</p>
				</div>
-->

            <?php
//$a = null;
            $query = "SELECT * FROM committee group by committee_name HAVING principal_verified = 0 and hod_verified = 1";
                
            $result = mysqli_query($connection, $query);
            
            
            $num = mysqli_num_rows($result);
                
            $count = 0;
            for($i=1; $i<=$num; $i++){
                $row = mysqli_fetch_assoc($result);
                ?>
                
                <div class="col-xs-4 col-sm-6 col-md-6 col-lg-5" style="background-color:#CEE5F2;margin:30px 0px 0px 55px;height:200px">
					<p>Committee Name :  <?php echo $row['committee_name']; ?></p>
                    <p>Issuer : <?php echo $row['committee_name']; ?> Chairperson </p>
                    <p>Status : Pending</p>
                    <a href="students_list.php?committee_id=<?php echo $row['id']?>" style="color:#fff; background:#b0413e; padding:7px; padding-left:20px; padding-right:20px; text-decoration:none;">Verify</a>
                    
				</div>
           <?php
            }
            

                ?>



			</div>
		</div>


	</section>
	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-left">
						<h3>DigiCert</h3>
						<p>A place to have the digitalised certificates</p>
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
									<strong>Email:</strong> <span>info@digicert.in</span>
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


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/dapp.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<?php
    if(isset($row['id'])){
    ?>

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
        toastr["success"]("You have successfully Logged In","Principal ");
        
    </script>
<?php
    }
    ?>
</body>

</html>
