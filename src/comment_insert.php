<?php
echo "hello";
require_once("db.php");

    $comment = $_GET['comment'];
//    echo $comment;
//    $committee_name = $_GET['committee_name'];
//    $committee_id = $_GET['committee_id'];
//    echo $committee_id;
    $query="INSERT INTO committee(id,committee_name,hod_name,principal_name,hod_verified,principal_verified,issue_raised,comments) VALUES('','CSI','SHALU CHOPRA','JM NAIR',0,0,1,'$comment')";
    $query_result = mysqli_query($connection, $query);
    header("Location: http://localhost/certificate/src/hod_students_list.php?committee_id=1");
    exit;
?>