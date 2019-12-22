<?php
include_once("db.php");
//session_start();
//$organization_id = $_SESSION["organization_id"];
echo "hello";
//if(isset($_GET['submit'])){
    echo "hey";
//    $name = $_GET["name"];
//    $logo = $_POST["logo"];
    $cn = $_GET["cn"];
//    echo $commitee_name;
    $cf = $_GET["cf"];
    $r = $_GET["r"];
    $f = $_GET["f"];
    $e=$_GET['e'];
    $cof=$_GET['cof'];
    echo $e;
//    $full_name = $_GET["full_name"];
//    $signature_1_photo = $_POST["signature_1_photo"];
//    $rank = $_GET["rank"];
//    $excel_sheet = $_POST["excel_sheet"];
//    $field = $_GET["field"];
    
    $query = "INSERT INTO committee(id, committee_name,hod_name, principal_name, hod_verified, principal_verified) VALUES('', '$cn','Shalu Chopra', 'JM Nair',0, 0)";
//    echo $query;
    $result = mysqli_query($connection, $query);
    
    $sql = "CREATE TABLE $cn (
  student_id int(11) NOT NULL AUTO_INCREMENT,
  student_name varchar(255) NOT NULL,
  class varchar(255) NOT NULL,
  rank varchar(255) NOT NULL,
  field varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  qr_image varchar(255) NOT NULL,
  link varchar(255) NOT NULL,
  PRIMARY KEY (student_id)
)";
    
//    echo $sql;
    
    $result = mysqli_query($connection, $sql);

    $my_query = "INSERT INTO $cn(student_id, student_name, class, rank, field, email, qr_image, link) VALUES('','$cf','IT','$r','$f','$e','','')";
    echo $my_query;
    $r = mysqli_query($connection, $my_query);

    $query = "INSERT INTO student(student_id, competition_name, student_name, committee_name) VALUES('','$cn','$cf','$cof')";
    echo $query;
    $res = mysqli_query($connection, $query);
//echo $query;

//}
//header("Location: https://localhost:3000/student_entry_form.html");
//exit;
    // header("Location: phpmailer/my_mail/php");
    // exit;
  
?>
<html>
    <script>
    window. location.href="http://localhost:3000/student_entry_form.html";
    </script>  
</html>