<?php
require_once("db.php");
include('phpqrcode/qrlib.php'); 
//$organization_id=$_SESSION['organization_id'];
//$organization_id=13;

// echo "here";

//if(isset($_GET['verify']))
//{
    // echo "here";
    $commitee_id=$_GET['committee_id'];
    // $committee_id_hash = $commitee_id; 
    echo "<br>";
  
    $ciphering = "BF-CBC"; 
  
    $iv_length = openssl_cipher_iv_length($ciphering); 
    $options = 0; 
  
    $encryption_iv = '12345678'; 
  
    $encryption_key = "DigiCertificate"; 
  
     $committee_id_hash= openssl_encrypt($commitee_id, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
    // echo $encryption;


//$generation_id=1;
//    echo "<br>".$generation_id;
//    if(isset($_FILES['higher_authority_signature'])){
//        //yes the file was uploaded so we are initializing all the required variables
//        $image_name = $_FILES['higher_authority_signature']['name'];
//        $image_size = $_FILES['higher_authority_signature']['size'];
//        $temp_name = $_FILES['higher_authority_signature']['tmp_name'];
//        $file_type = $_FILES['higher_authority_signature']['type'];
//        
//        echo $image_name;
//        $file_extension = strtolower(end(explode(".",$image_name)));
//    }
    
    //$image_name=$generation_id.".png";
//    //if(isset($_FILES['higher_authority_signature'])){
//        move_uploaded_file($temp_name,"images/higher_authority_signature/".$image_name);   
//    }
//    echo "ADDED";
    
    
    
    
//    $image = $generation_id.".png";
//    echo $image;
//    $query = "UPDATE generation SET higher_authority_signature = '$image' WHERE generation_id = $generation_id";
//    echo $recent_id;    
//    $result = mysqli_query($connection, $query);


$query="Select * from committee where id= $commitee_id";
// echo $query;
$result_set=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result_set);
$table_name=$row['committee_name'];
//$template_id=$row['template_id'];
$template_id ='t4';

//echo $table_name;

$query="Select * from $table_name";
$result_set=mysqli_query($connection,$query);
    
$num=mysqli_num_rows($result_set);
$count=0;
    
while($count!=$num)
{   
//    echo "<br>";
    $row=mysqli_fetch_assoc($result_set);
    $student_id=$row['student_id'];
    $name=$row['student_name'];
//    echo $student_id;
    $count=$count+1;
    $folder="qrimages/";
    
    
//    $qr_name=explode(".",$generation_id,$student_id);
    $file_name=".png";
    $qr_name=$commitee_id.$student_id.$file_name;
    $text=$name;
    
//    echo $qr_name;
    $file=$folder.$qr_name;


    $com_hash="";

    $simple_string = $student_id; 
    echo "<br>";
  
    $ciphering = "BF-CBC"; 
  
    $iv_length = openssl_cipher_iv_length($ciphering); 
    $options = 0; 
  
    $encryption_iv = '12345678'; 
  
    $encryption_key = "DigiCertificate"; 
  
    $student_id_hash = openssl_encrypt($simple_string, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
    // echo $student_id_hash;

    $decryption = openssl_decrypt($student_id_hash, $ciphering, 
    $encryption_key, $options, $encryption_iv);
    echo "<br>";
    // echo $decryption;

    $link="committe_id=".$committee_id_hash."&"."student_id=".$student_id_hash;


    // echo $link;
    $links='localhost/certificate/src/'.$template_id.".php?".$link;
    echo $links;
//    echo $qr_name;
    QRcode::png($links,$file);
    $query="Update $table_name set qr_image='$qr_name',link='$links' where student_id=$student_id";
//    echo $query;
    $result=mysqli_query($connection,$query);
}
    
$query="Select * from $table_name";
// echo $query;
$result_set=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result_set);
$emails=$row['email'];
// echo $emails;
$link=$row['link'];
    // echo $link;

$qr = "UPDATE committee SET principal_verified=1 WHERE hod_verified=1 and principal_verified=0 and id = $commitee_id";
$res=mysqli_query($connection,$qr);

    
//require_once("phpmailer/test.php");   
// $email="2016.jiten.tolani@ves.ac.in";

// require_once("generation_form.html");   
// require_once("../phpmailer/testing.php");       
    
//}

 header("Location: ../phpmailer/my_mail.php?mail=$emails&qr=$qr_name&link=$link" );
?>