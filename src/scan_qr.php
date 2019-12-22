
<!-- SELECT * FROM wholesaler_order,manufacturer,product,wholesaler where wholesaler_order.manufacturer_id=manufacturer.uid and wholesaler_order.status=0 and wholesaler_order.manufacturer_id=1 and wholesaler_order.product_id=product.product_id and wholesaler_order.wholesaler_id=wholesaler.uid and user.uid=wholesaler_order.wholesaler_id and user.uid=wholesaler.uid -->
<?php
//    require_once('../db.php');

include_once("db.php");

   
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

   

         <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/workflow.css">
	<link rel="stylesheet" href="vendor/animate/animate.css">
	<link rel="stylesheet" href="vendor/OwlCarousel2-develop/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/engine2/style.css" />
	<script type="text/javascript" src="vendor/engine2/jquery.js"></script>



	<style>
        
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
	
	
	<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
                           
         
    <!-- END HEAD -->

    <body style="background-color:#f9f9f9">
        <!--Navbar-->
	<nav class=" navbar navbar-light bg-light navbar-fixed-top" style="margin-top:20px;margin-left:550px;font-size:16px;">
		<div class="container-fluid">
		    <ul class="nav justify-content-center">
			<li class="nav-item">
				<a class="nav-link active bit_nav bit_nav1" href="#" style="color:#B0413E ">Home</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="#contact" style="color:#B0413E ">Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="http://localhost/certificate/src/sign_up.php" style="color:#B0413E ">Sign Up</a>
			</li>
			<li class="nav-item ">
				<a class="logout btn bit_button" href="login.html" style="color:#fff;background-color:#b0413e; margin-top:5px;">Login</a>
			</li>


		</ul>
		</div>
	</nav>
<div style="background: #b0413e">
                    <!-- BEGIN PAGE TITLE-->
                    <h2 style="color:#f9f9f9;letter-spacing:3px;text-align:center; padding-top: 20px;">Features</h2>
		<div style="width: 50px; height: 3px; background:#f9f9f9; margin: 0 auto 30px;"></div>                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">

                        <div class="row">
                            <div class="col-md-8" style = "margin-left : 85%; margin-bottom: 50px;;"  >
                                <div class="table-responsive">
                                
                                <video id="preview"></video>

                                </div> 
                                
                            </div>
                        </div>

                    
                        
                    </div>
                    <div class="clearfix"></div>
                    </div>
                    <!-- END DASHBOARD STATS 1-->
                
                <!-- END CONTENT BODY -->
           
            <!-- END CONTENT -->
        
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
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
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <script>
        var hashes="";
        var hasharr="";
//        var total;
        $(document).ready(function (){
//            var url=$(location).attr("href");
//            var urlarray=url.split("?");
//            var splitmeagain=urlarray[1];
//            var orderid=splitmeagain.split("=");
//            orderid=orderid[1];
            
            $.ajax({ 
               type: "POST", 
               url: "fetch_qr.php", 
               data: { id : 1}, 
               success: function(ans) {
//                        hashes=JSON.parse(ans);
//                   hashes = ans;
//                         JSON.stringify(hashes);
                        //console.log(hashes['hashdata']);
                   console.log(hashes);
//                   console.log(hashes['link']);
//                        hasharr=(hashes['link']).toString();
//                   hasharr = [1,2,3,4];
//                        total=hashes['product_quantity'];
//                      console.log(hasharr); 
                     } 
                });
//                 var arr=hasharr.split(",");
//         console.log(arr); 
        });
        
        console.log(hasharr);
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
            }
        );

        var content_array = [];
       // console.log(hashes.hashdata);
       var count=0;
        scanner.addListener('scan', function(content) {
            
//            alert('showing content : ' + content);

            if(content=="localhost/certificate/src/t2.php?committe_id=XTy/DndmjpU=&student_id=o1Ey6g7KGTk=" )
//                && content_array.includes(content)==false
            {

                hasharr.replace(content,"");
                console.log(hasharr);
                alert("Authenticated!!");
                window.location.href="http://localhost/certificate/src/t2.php?committe_id=XTy/DndmjpU=&student_id=o1Ey6g7KGTk=";
//                count++;
//                document.getElementById("count").innerHTML=count;
//                if(count==total)
//                {
//                    alert("All hash have been matched!!");
                    // document.getElementById("linkbtn").style.display="block";
                    // document.getElementById("linkbtn").innerHTML=("<a href='addtowarehouse.php?orderid="+orderid+">Add To Warehpuses</a>");
//                }
            }
            else{
                alert("Fraud QR Code!!!!!!");
            }
            content_array.push(content);
            // window.open(content, "_blank");
        });
        console.log(hasharr);
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                console.error("camer not working!");
            }
        });
    </script>
        <!-- BEGIN CORE PLUGINS -->
        <script src="../vendors/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../vendors/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../vendors/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../vendors/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../vendors/pages/scripts/dashboard.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../vendors/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../vendors/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!--BEGIN CUSTOM SCRIPT LOADING-->
        <script src="../vendors/pages/scripts/custom.js" type="text/javascript"></script>
        <!--END OF CUSTOM SCRIPT LOADING-->
    </body>

</html>