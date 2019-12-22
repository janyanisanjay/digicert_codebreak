<?php
require_once('db.php');
//session_start();
echo "here";
if(isset($_POST['submit'])){
    echo "here";
    $email_id=$_POST['email_id'];
    $password=$_POST['password'];
//    $student_id=$_POST['student_id'];
    echo $email_id,$password;
//    echo $student_name;
    $query="select * from sign_up where email_id='$email_id' and password ='$password'";
    $result=mysqli_query($connection,$query);
    $result_set=mysqli_fetch_assoc($result);
    echo "here";
    if($result_set['role']==0 && $result_set['email_id']==$email_id && $result_set['password']==$password)
    {   
//        echo "here";
//        end;
        header("Location: http://localhost:3000/issuer_first.html");
    }
    elseif($result_set['role'] == 1 && $result_set['email_id']==$email_id && $result_set['password']==$password){
        header("Location: http://localhost/certificate/src/higer_authority_first.php");
    }
    elseif($result_set['role'] ==2 && $result_set['email_id']==$email_id && $result_set['password']==$password){
        header("Location: http://localhost/certificate/src/principal_first.php");
    }
    elseif($result_set['role'] ==3 && $result_set['email_id']==$email_id && $result_set['password']==$password){
        header("Location: http://localhost/certificate/src/sign_up.php");
    }
    elseif($result_set['role'] ==4 && $result_set['email_id']==$email_id && $result_set['password']==$password){
        header("Location: http://localhost/certificate/src/student_dash.php?email_id=$email_id");
    }
}
?>