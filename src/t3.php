<?php
include_once("db.php");


//session_start();
//$organisation_id=$_SESSION['organization_id'];

$committee_id=$_GET['committe_id'];
$student_id=$_GET['student_id'];
$ciphering = "BF-CBC"; 
  
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
  
$encryption_iv = '12345678'; 
  
$encryption_key = "DigiCertificate"; 

$committe_id_dehash = openssl_decrypt($committee_id, $ciphering, 
$encryption_key, $options, $encryption_iv);

$student_id_hash= openssl_decrypt($student_id, $ciphering, 
    $encryption_key, $options, $encryption_iv);
//echo $generation_id;
//echo $student_id;
$query="Select * from committee where id=$committe_id_dehash";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
$certificate_title='Appreciation';
$signature_1=$row['committee_name'].'Chairperson';
$signature_2=$row['hod_name'];
$signature_3=$row['principal_name'];
//$date=$row['date'];
//$issuer_signature=$row['issuer_signature'];
//echo $issuer_signature;
//$higher_authority_signature=$row['higher_authority_signature'];
//echo $higher_authority_signature;
//$qr_code=$row[''];
$committee_name=$row['committee_name'];
//echo $committee_name;
$logo="logo.png";


echo $committe_id_dehash,$student_id_hash;
$query="select * from $committee_name where student_id=$student_id_hash";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
$student_name=$row['student_name'];
$field=$row['field'];
$class=$row['class'];
$rank=$row['rank'];
$qr_code=$row['qr_image'];
//echo $qr_code;






//$student_name = "Vishal Israni";
//$field = "Academics";
//$rank = "1st";
//$class= "D15";
//$query="select * from organization where organization_id=1";
//$result=mysqli_query($connection,$query);
//$row=mysqli_fetch_assoc($result);
//$organisation_name=$row['name'];

$organisation_name = "VESIT";
//$date = "22/07/2018";
//$signature_1 = "Signature";
//$signature_2 = "Signature";
//$certificate_title = "Certificate of Achievement";
//$committee_name = "CSI";

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
                            <img src="qrimages/<?php echo $qr_code?>" style="margin-top:40%" alt="">
                        </div>
                    </div><!--certi-qr-code-->
                   <div class="certi-logo">
               <div class="logo">
                   <img src="images/logo_images/<?php echo $logo;?>" alt="" style="width:100px;height:100px;margin-top:40%;">
               </div>
               </div>
                <div class="certi-title-2">
                   <p style="margin-left:22%">Certificate of <?php echo $certificate_title?></p>
               </div><!--certi-title-2-->
               <div class="organisation-2">
                   <p><?php echo $organisation_name?></p>
               </div>
                <div class="certi-body-2">
                   <p>This is to certify <span><?php echo $student_name;?>  </span> has secured <?php echo $rank; ?> rank of class <?php echo $class;?> for his/her performance in <span>  <?php echo $field;?>  </span></p>
                   
               </div><!--certi-body-2-->
            <div class="row">
               <div class="col-md-4 col-sm-4">
               <div class="sign2">
                   <p><image class="sign" src="images/signature/sign1.png"></image></p><p><?php echo $signature_1;?> </p>
               </div>
               </div>
               <div class="col-md-4 col-sm-4">
               <div class="sign2">
                   <p><image class="sign" src="images/signature/sign2.png"></image></p><p><?php echo $signature_2;?></p>
               </div>
               </div>
               <div class="col-md-4 col-sm-4">
               <div class="sign2">
                   <p><image class="sign" src="images/signature/sign3.png"></image></p><p><?php echo $signature_3;?></p>
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