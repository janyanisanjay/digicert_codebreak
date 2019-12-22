<?php
include_once("db.php");


//session_start();
//$organisation_id=$_SESSION['organization_id'];

$committee_id=$_GET['committe_id'];
$student_id=$_GET['student_id'];

$encryption_key = "DigiCertificate"; 
$ciphering = "BF-CBC"; 
  
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
  
$encryption_iv = '12345678'; 
  
$committe_id_dehash = openssl_decrypt($committee_id, $ciphering, 
$encryption_key, $options, $encryption_iv);

$student_id_hash= openssl_decrypt($student_id, $ciphering, 
    $encryption_key, $options, $encryption_iv);
//echo $committe_id_dehash;
//echo $generation_id;
//echo $student_id;
$query="Select * from committee where id=$committe_id_dehash";  
//echo $query;
//echo "   ";

$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
//print_r($result);
$certificate_title='APPRECIATION';
$signature_1=$row['committee_name'].' Chairperson';
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
$logo="mitlogo.png";


//echo $committe_id_dehash,$student_id_hash;
$query="select * from $committee_name where student_id=$student_id_hash";
//echo $query;
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

$organisation_name = "MIT UNIVERSITY OF ".'<br>'."ART , DESIGN AND TECHNOLOGY";
//$date = "22/07/2018";
//$signature_1 = "Signature";
//$signature_2 = "Signature";
//$certificate_title = "Certificate of Achievement";
//$committee_name = "CSI";


?>
<html>
    <head>
        <title>E certi</title>
        <link rel="stylesheet" href="css/certi-style-t4.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <style>
         #load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
/*    background:url("images/verify.gif") no-repeat center center rgb(45,45,45);*/
             background:url("images/veri.gif") no-repeat center center rgb(255,255,255);
}
        </style>
    </head>
    <body>
    <div id="load"></div>
    <div id="contents">
    <div class="main"  >
         <div class="container-fluid" style="margin-left:10px"> 
         <div class="text-center">   
            <ul class="list-inline">
                <li><img src="images/logo_images/<?php echo $logo;?>" style="margin: 25px 25PX 0PX 25PX"></li>
                <li style="margin-top:30px;"><p class="tops"><b><?php echo $organisation_name?></b></p>
                  
                </li>
                <li><img src="qrimages/<?php echo $qr_code?>" style="margin: 25px 25px 0px 25px" alt=""></li>
                
            </ul>
            </div>
            <br>
            <div class="text-center">
             <ul>
                 <li class="praxis-title"><b><?php echo $committee_name;?></b></li>
<!--                 <li class="praxis">Organized by VESIT RENAISSANCE CELL</li>-->
            </ul>
            <p class="praxis-title own">CERTIFICATE OF <?php echo $certificate_title?></p>
            </div>
            <br>
            <br>
             <div class="font-specifications">
             <div class="text-center">
                 <span class="first">This certificate is proudly presented to  </span><span id="input_name"><u><?php echo $student_name;?></u></span>&nbsp;&nbsp;&nbsp;<span class="first">of &nbsp;</span><span id="input_class"><u><?php echo $class;?></u></span><span class="next">&nbsp;&nbsp;&nbsp;for</span> 
         
             </div>
             <div class="text-center">
                 <span class="first">securing&nbsp;&nbsp;&nbsp;</span><span id="input_position"><u><?php echo $rank; ?></u></span>&nbsp;&nbsp;&nbsp;<span class="first">position in the &nbsp;</span><span id="input_event"><u><?php echo $field;?></u></span><span class="next">&nbsp;&nbsp;&nbsp;Competition</span> 
         
             </div>
             <div class="text-center">
                 <span class="first">held on 22/08/2019.</span> 
         
             </div>
             </div>
             <div style="margin-top: 80px; margin-left: 180px; margin-right:100px;">
             <div class="container" style="width:800px" >
                <div class="row">
             <div class="col-md-4 col-sm-4">
                 <p class="content3"><image style="height: 50px; width: 120px" src="images/signature/sign1.png"></image></p>
                 <p class="content4"><?php echo $signature_1;?></p>
             </div>
              <div class="col-md-4 col-sm-4 ">
                  <p class="content3"><image style="height: 50px; width: 120px" src="images/signature/sign2.png"></image></p>
                 <p class="content4">Head Of Department</p>
             </div>
             <div class="col-md-4 col-sm-4 ">
                  <p class="content3"><image style="height: 50px; width: 120px" src="images/signature/sign3.png"></image></p>
                 <p class="content4">Principal</p>
             </div>

             </div>
             </div>
            </div>
        </div>   
     </div>
     <a href="to_pdf.php? <?php echo 'committe_id='.$committe_id_dehash.'&student_id='.$student_id_hash; ?>" >   Download as pdf</a>
     </div>
    </body>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
    document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('contents').style.visibility="hidden";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('contents').style.visibility="visible";
      },1000);
  }
}
    </script>
</html>