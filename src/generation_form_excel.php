<?php
//include_once("../../functiodb.php");
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
     
    </style>
</head>

<body>
   <nav class="navbar-light bg-light" style="padding:20px;font-size:16px;">
	<div class="container-fluid">
		    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active bit_nav bit_nav1" href="http://localhost:3000/issuer_first.html" style="color:#B0413E ">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active bit_nav" href="" style="color:#B0413E ">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active bit_nav" href="http://localhost/certificate/src/issues.php" style="color:#B0413E ">Issue</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active bit_nav" href="http://localhost/certificate/src/history.php" style="color:#B0413E ">History</a>
                </li>
      <li class="nav-item ">
        <a class="logout btn bit_button" href="" style="color:#fff;background-color:#b0413e; margin-top:5px;">Logout</a>
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
                            <h3  class="text-heading" style="font-size: 30px;">Category</h3>
                            <div style="width: 50px; height: 3px; background:#b0413e; margin: 0 auto 30px;"></div>
                        </div>
                        
                        <!--End of category-heading-->
                    </div>
                    <!--End of form-title-->
                    <div class="form-content">
                        <form action="insert_generation.php" method="POST" enctype="multipart/form-data">
                          <div class="alert alert-danger display-hide">
                                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                           <div class="form-group">
                                <label for="">Organisation Name</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <?php
//                               $query = "SELECT * FROM organization WHERE organization_id = $organization_id";
//                               $result = mysqli_query($connection, $query);
//                               $row = mysqli_fetch_assoc($result);
//                               
                               ?>
                                <input type="text" class="form-control" id="" placeholder="Organisation Name" name="name" value="VESIT" readonly>
                            </div>
<!--
                            <div class="form-group">
                                <label for="">Logo <span style="color: red;">Upload a Transperent png. Tool: <a href="https://onlinepngtools.com/create-transparent-png">onlinepngtools</a></span></label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="file" accept="image/*" id="" name="logo">
                            </div>
-->
                            <div class="form-group">
                                <label for="">Committee Name :  <span style="color:red;">Enter name of your committee</span></label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="commitee_name" placeholder="Commitee Name" name="commitee_names">
                            </div>


                            <div class="form-group">
                                <label for=""> Certificate of :  </label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="certificate_of" placeholder="Certificate of.." name="certificate_of">
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
                            <div class="form-group">
                                <label for="">Upload Excel Sheet</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="file" id="" name="excel_sheet" class="">
                            </div>
<!--
                            <div class="form-group">
                                <label for="">Upload Excel Sheet</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="hidden" id="" name="template_id" class="" value='<?php //echo $template_id; ?>'>
                            </div>
-->
                            
<!--                            <button type="submit" class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2); background-color: #b0413e; padding: 10px; width: 25%; margiin-left: 30px; margin-top:15px; color: white;" name="submit_generation">Submit</button>-->
                            <input type="submit" value="NEXT" class="btn"  name="submit_generation"style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2); background-color: #b0413e; padding: 10px; width: 25%; margiin-left: 30px; margin-top:15px; color: white;" onclick="passvalues();" >

                            
                        </form>
                    </div>
                    <!--End of form-content-->
                </div>
                </div>
                <!--End of col-md-6-->
                <div class="col-md-7" style="background-color: #b0413e; padding: 50px; bottom:0; right:0; top:0;">
                    <div class="certificate-image" style="">
                    <div class="image-outer" style="padding: 9px; padding-left: 60px;">
<!--                        <div class="image-inner">-->
                            <img src="images/certificate_templates/t4.png" alt="Work" class="img-responsive" style="width: 650px; height: 550px;">
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
