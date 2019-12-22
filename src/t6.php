<?php
//include_once("../../functions/db.php");
//session_start();
////$organisation_id=$_SESSION['organization_id'];
//
//$generation_id=$_GET['generation_id'];
//$student_id=$_GET['student_id'];
////echo $generation_id;
////echo $student_id;
//$query="Select * from generation where generation_id=$generation_id";
//$result=mysqli_query($connection,$query);
//$row=mysqli_fetch_assoc($result);
//$certificate_title=$row['certificate_title'];
//$signature_1=$row['issuer_name'];
//$signature_2=$row['higher_authority_name'];
//$date=$row['date'];
//$issuer_signature=$row['issuer_signature'];
////echo $issuer_signature;
//$higher_authority_signature=$row['higher_authority_signature'];
////echo $higher_authority_signature;
////$qr_code=$row[''];
//$committee_name=$row['commitee_name'];
////echo $committee_name;
//$logo=$row['logo'];
//
//
//
//$query="select * from $committee_name where student_id=$student_id";
//$result=mysqli_query($connection,$query);
//$row=mysqli_fetch_assoc($result);
//$student_name=$row['student_name'];
//$field=$row['field'];
//$class=$row['class'];
//$rank=$row['rank'];
//$qr_code=$row['qr_image'];
////echo $qr_code;






$student_name = "Latika Gurnani";
$field = "Cricomania";
$rank = "1st";
$class= "D15";
//$query="select * from organization where organization_id=1";
//$result=mysqli_query($connection,$query);
//$row=mysqli_fetch_assoc($result);
//$organisation_name=$row['name'];

$organisation_name = "VIVEKANAND INSTITUTE OF TECHNOLOGY";
$date = "22/07/2018";
$signature_1 = "Signature";
$signature_2 = "Signature";
$certificate_title = "Certificate of Achievement";
$committee_name = "CSI";

?>
   <html>
    <head>
       <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">


       <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
       
       <link rel="stylesheet" href="css/style-certificate.css">
        <title>Certificate</title>
    </head>
    <body>
        <div class="content">
        <div class="container show-bg">
            <div class="background">
                <div class="bg-1">
                    <div class="row">
                <div class="col-md-12">
                    <div class="certificate-body-2">
                     <div class="certi-qr-code">
                        <div class="qr-code" style="margin-left:30px">
                            <img src="qrimages/11.png" style="margin-top:40%" alt="">
                        </div>
                    </div><!--certi-qr-code-->
                   <div class="certi-logo">
               <div class="logo">
                   <img src="images/logo_images/csi_logo.png" alt="" style="width:100px;height:100px;margin-top:40%;">
               </div>
               </div>
                <div class="certi-title-2">
                   <p style="margin-left:22%"> <?php echo $certificate_title?></p>
               </div><!--certi-title-2-->
               <div class="organisation-2">
                   <p><?php echo $organisation_name?></p>
               </div>
                <div class="certi-body-2">
                   <p>This is to certify <span><?php echo $student_name;?>  </span> has secured <?php echo $rank; ?> rank of class <?php echo $class;?> for his/her performance in <span>  <?php echo $field;?>  </span></p>
                   
               </div><!--certi-body-2-->
            <div class="row">
               <div class="col-md-4 col-sm-4">
                   <div class="certi-date-2"><p>Date: <?php echo $date;?></p></div>
               </div>
               <div class="col-md-4 col-sm-4">
               <div class="sign2">
                   <p><image class="sign" src="images/signature/sign1.png"></image></p><p><?php echo $signature_1;?> </p>
               </div>
               </div>
               <div class="col-md-4 col-sm-4">
               <div class="sign2">
                   <p><image class="sign" src="images/signature/sign1.png"></image></p><p><?php echo $signature_2;?></p>
               </div>
               </div>
                </div><!--row-->
                </div><!--certificate-body-2-->
                </div><!--col-md-12-->
            </div><!--row-->
                </div>
            </div>
            
        </div><!--container-->
        </div><!--content-->
    </body>
</html>