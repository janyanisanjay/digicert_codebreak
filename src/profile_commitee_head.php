<?php
//include_once("../../functions/db.php");
//ob_start();
//session_start();
//$organization_id = $_SESSION["organization_id"];// to be uncommented
////$organization_id = 13; //to be commented afterwards when involving sessions
//$template_id=$_GET['template_id'];
////echo $template_id;
//    
require_once("db.php");    
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
    <section id="generation_form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5" style="padding: 50px;">
                   <div>
                    <div class="form-title">
                        <div class="category-heading text-center">
                            <h3  class="text-heading" style="font-size: 30px;">Profile </h3>
                            <div style="width: 50px; height: 3px; background:#b0413e; margin: 0 auto 30px;"></div>
                        </div>
                        
                        <!--End of category-heading-->
                    </div>
                    <!--End of form-title-->
                    <div class="form-content">
                        <form action="#" method="POST" enctype="multipart/form-data">
                          <div class="alert alert-danger display-hide">
                                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                           <div class="form-group">
                                <label for="">First Name</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <?php
                               $query = "SELECT * FROM sign_up WHERE role=0";
                               $result = mysqli_query($connection, $query);
                               $row = mysqli_fetch_assoc($result);
                               $first_name = $row['first_name'];
                               $last_name = $row['last_name'];
                               $email_id = $row['email_id'];
                               $contact_no = $row['contact_no'];
                               $password = $row['password'];
                               ?>
                                <input type="text" class="form-control" id="" placeholder="Organisation Name" name="name" value="<?php echo $row['first_name']; ?>" readonly>
                            </div>
<!--
                            <div class="form-group">
                                <label for="">Logo <span style="color: red;">Upload a Transperent png. Tool: <a href="https://onlinepngtools.com/create-transparent-png">onlinepngtools</a></span></label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="file" accept="image/*" id="" name="logo">
                            </div>
-->
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="commitee_name" placeholder="" name="last_name" value="<?php echo $row['last_name']; ?>" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Email ID</label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="commitee_name" placeholder="" name="email_id" value="<?php echo $row['email_id']; ?>" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Password </label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="password" class="form-control" id="commitee_name" placeholder="" name="password" value="<?php echo $row['password']; ?>" readonly>
                            </div>
                            
                            <input type="submit" value="Change Password" class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2); background-color: #b0413e; padding: 10px; width: 35%; margiin-left: 30px; margin-top:15px; color: white;" onclick="passvalues();" >
                            <br><br>
                            <div class="form-group">
                                <label for="">Contact No. </label>
                                <div style="width: 50px; height: 3px; background:#b0413e; margin-bottom: 15px;"></div>
                                <input type="text" class="form-control" id="commitee_name" placeholder="" name="contact_no" value="<?php echo $row['contact_no']; ?>" readonly>
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
<!--                            <input type="submit" value="NEXT" class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2); background-color: #b0413e; padding: 10px; width: 25%; margiin-left: 30px; margin-top:15px; color: white;" onclick="passvalues();" >-->
                        </form>
                    </div>
                    <!--End of form-content-->
                </div>
                </div>
                <!--End of col-md-6-->
<!--                <div class="col-md-7" style="background-color: #b0413e; padding: 50px; position:fixed; bottom:0; right:0; top:0;">-->
<!--                    <div class="certificate-image" style="padding: 50px;">-->
                    <div class="image-outer" style="padding: 20px; padding-left: 60px;">
                        <div class="image-inner">
                            <img src="images/profile.jpeg" alt="Work" class="img-responsive" height="300px" width="300px">
                        </div>
                    </div>
<!--                    </div>Certifiacte Image-->
<!--                </div>-->
            </div>
            <!--End of row-->
        </div>
        
        <!--End of container-->
    </section>
</body>
</html>
