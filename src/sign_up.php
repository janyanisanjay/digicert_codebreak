<?php
//include_once("../../functions/db.php");
//ob_start();
//session_start();
//$organization_id = $_SESSION["organization_id"];// to be uncommented
////$organization_id = 13; //to be commented afterwards when involving sessions
//$template_id=$_GET['template_id'];
////echo $template_id;
//    
    
?>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <style>
        body{
	        font-family: "Nunito Sans", sans-serif;
	
            /*	background:#f8f8f8;*/
        }
        .display-hide{
            display: none;
        }
        
    </style>
    <script type="text/javascript">
            function passvalues()
            {
                //window.alert();
                var commitee_name_get=document.getElementById("commitee_name").value;
                document.getElementById("para").innerHTML='snj'
                //$("#para").html("cot " + commitee_name_get);
                localStorage.setItem("commitee_name_new",commitee_name_get);
                var t=localStorage.getItem("commitee_name_new");
                window.alert(t);
                return false;

            }
    </script>
</head>

<body>
   
   <nav class=" navbar navbar-light bg-light navbar-fixed-top" style="margin-top:20px;font-size:16px;">
		<div class="container-fluid">
		    <ul class="nav justify-content-left">
			<li class="nav-item">
				<a class="nav-link active bit_nav bit_nav1" href="#" style="color:#B0413E ">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="#workflow" style="color:#B0413E ">How it Works</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="#features" style="color:#B0413E ">Features</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="#clients" style="color:#B0413E ">Organizations</a>
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

    <section id="generation_form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5" style="padding: 50px;">
                   <div>
                    <div class="form-title">
                        <div class="category-heading text-center">
                            <h3  class="text-heading" style="font-size: 30px;">Sign Up</h3>
                            <div style="width: 50px; height: 3px; background:#b0413e; margin: 0 auto 30px;"></div>
                        </div>
                        
                        <!--End of category-heading-->
                    </div>
                    <!--End of form-title-->
                    <div class="form-content">
                        <form action="sign_up_insert.php" method="POST" enctype="multipart/form-data">
                          <div class="alert alert-danger display-hide">
                                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                           <form>
                            <div class="form-group">
                                <label for="">First Name</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <?php
//                               $query = "SELECT * FROM organization WHERE organization_id = $organization_id";
//                               $result = mysqli_query($connection, $query);
//                               $row = mysqli_fetch_assoc($result);
//                               
                               ?>
                                <input type="text" class="form-control" id="" placeholder="First Name" name="first_name" value="">
                            </div>
<!--
                            <div class="form-group">
                                <label for="">Logo <span style="color: red;">Upload a Transperent png. Tool: <a href="https://onlinepngtools.com/create-transparent-png">onlinepngtools</a></span></label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="file" accept="image/*" id="" name="logo">
                            </div>
-->
                            <div class="form-group">
                                <label for="">Last Name </label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="commitee_name" placeholder="Last Name" name="last_name">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Email ID </label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="commitee_name" placeholder="Enter Email ID" name="email_id">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Contact No. </label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="commitee_name" placeholder="Enter Contact No." name="contact_no">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Password </label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="commitee_name" placeholder="Set Password" name="password">
                            </div>
<!--
                            <div class="form-group">
                                <label for="">Certificate Title</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="" placeholder="Certificate Title" name="certificate_title">
                            </div>
-->
<!--
                            <div class="form-group">
                                <label for="">Date</label>
                                <div style="width: 30px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="date" class="form-control" id="" name="date">
                            </div>
-->
<!--
                            <div class="form-group">
                                <label for="">Issuer Name</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="" placeholder="Issuer Name" name="signature_1_name">
                            </div>
-->
<!--
                            <div class="form-group">
                                <label for="">Issuer Signature <span style="color: red;">Upload a Transperent png. Tool: <a href="https://onlinepngtools.com/create-transparent-png">onlinepngtools</a></span></label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="file" id="" name="signature_1_photo" class="">
                            </div>
-->
<!--
                            <div class="form-group">
                                <label for="">Higher Authority Name</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="" placeholder="Higher Authority Name" name="signature_2_name">
                            </div>
-->
<!--
                            <div class="form-group">
                                <label for="">Upload Excel Sheet</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="file" id="" name="excel_sheet" class="">
                            </div>
-->
<!--                            <div class="form-group">-->
<!--                                <label for="">Upload Excel Sheet</label>-->
<!--                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>-->
<!--                                <input type="hidden" id="" name="template_id" class="" value='<?php //echo $template_id; ?>'>-->
<!--                            </div>-->
                            
<!--                            <button type="submit" class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2); background-color: #b0413e; padding: 10px; width: 25%; margiin-left: 30px; margin-top:15px; color: white;" name="submit_generation">Submit</button>-->
                            <input type="submit" value="SUBMIT" class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2); background-color: #b0413e; padding: 10px; width: 25%; margiin-left: 30px; margin-top:15px; color: white;" name="submit">
                        </form>
                        </form>
                    </div>
                    <!--End of form-content-->
                </div>
                </div>
                <!--End of col-md-6-->
                <div class="col-md-7" style="background-color: #b0413e; padding: 50px; position:fixed; bottom:0; right:0; top:0;">
                    <div class="certificate-image" style="padding: 50px;">
                    <div class="image-outer" style="padding: 20px; padding-left: 20px;">
<!--                        <div class="image-inner">-->
                            <img src="images/signup.png" alt="Work" class="img-responsive" height="400px" width="600px">
<!--                        </div>-->
                    </div>
                    </div><!--Certifiacte Image-->
                </div>
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <script>
    </script>
</body>
</html>