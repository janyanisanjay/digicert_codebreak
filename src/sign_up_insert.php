<?php
require_once('db.php');   

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_id = $_POST['email_id'];
    $contact_no = $_POST['contact_no'];
    $password = $_POST['password'];
        
    $query = "INSERT INTO sign_up(first_name, last_name, email_id, contact_no, password) VALUES('$first_name', '$last_name', '$email_id', $contact_no, '$password')";
    
    $query_result = mysqli_query($connection, $query);
    header("Location: http://localhost/certificate/src/sign_up.php");    
    }
?>