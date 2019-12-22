<?php

$connection= mysqli_connect("localhost","Sanjay","Sanjay#123","digital_certificate");
if(!$connection)
{
    die("Some issue in connecting ". mysqli_error($connection));
}



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$recv = $_GET['email'];
echo $recv;
$password=$_GET['login_password'];
//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sanjayjanyani43@gmail.com';                 // SMTP username
    $mail->Password = '9730319048';                           // SMTP password 9730319048
    $mail->SMTPSecure = 'tls';          //ssl                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 567;                      //465              // TCP port to connect to

    //Recipients
    $mail->setFrom('sanjayjanyani43@gmail.com', 'sanjay');
    $mail->addAddress($recv);     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Congratulations you have been logged in ';
    $mail->Body    = 'Hello you have been logged in to vesit question paper your password is <b>'.$password.'</b> .Kindly change your password ';
    $mail->AltBody = 'your password is <b>'.$password.'</b> Kindly change your password before using it';

    $mail->send();
    echo 'Message has been sent';
//    $url=
//    echo '<script type="text/javascript">';
//echo 'window.location.href="../Admin/student_register.php';
//echo '</script>';
    
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
//echo "<script>window.location.href='../Admin/student_register.php?q=1'</script>";
//header("Location: ../Admin/student_register.php");
//exit();

if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $mobile_no = $_GET['mobile_no'];
    $need = $_GET['need'];
    $address = $_GET['address'];
    $login_name = $_GET['login_name'];
    $login_password = $_GET['login_password'];
    
    $query = "SELECT * FROM organization";
    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die("Query Failed : ". mysqli_error($connection));
    }

//    if(mysqli_num_rows($result)!=0){
    $query = "INSERT INTO organization(name, email, mobile_no, need, address, login_name, login_password) VALUES('$name', '$email',$mobile_no, '$need', '$address', '$login_name', '$login_password')";
        
    $query_result = mysqli_query($connection, $query);
    if(!$query_result)
    {
        die("Query Failed : ". mysqli_error($connection));
    }    
//    }

    
}
?>




<html>
<head>
    <title>Admin Index</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
   <h3 class="text-center">Add Organization</h3>
    <form class="form-horizontal" action="" method="get">
        <div class="form-group">
            <label class="control-label col-sm-2">Organization Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Organization Name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Mobile No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Mobile no"  name="mobile_no">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Need</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Need" name="need">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Address" name="address">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Login ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Login ID" name="login_name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="email" placeholder="Enter Password" name="login_password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="submit">Submit</button>
            </div>
        </div>
        
    </form>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>