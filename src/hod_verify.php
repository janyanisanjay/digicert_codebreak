<?php
require_once("db.php");
$committee_id = $_GET['committee_id'];
$query = "Select committee_name from committee where id = $committee_id ";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$committee_name = $row['committee_name'];
echo $committee_name;
$query = "UPDATE committee SET hod_verified=1 WHERE hod_verified=0 and committee_name = '$committee_name'";
echo $query;
$result = mysqli_query($connection, $query);
echo "done";
header("Location: ../phpmailer/principal_mail.php?mail=2016.latika.gurnani@ves.ac.in");
?>