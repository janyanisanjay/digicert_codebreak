<?php

$connection= mysqli_connect("localhost","Sanjay","Sanjay#123","certificate");
if(!$connection)
{
    die("Some issue in connecting ". mysqli_error($connection));
}

?>