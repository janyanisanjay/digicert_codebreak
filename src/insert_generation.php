<?php
include_once("db.php");

if(isset($_POST["submit_generation"])){
    $commitee_name = $_POST['commitee_names'];
    $query = "INSERT INTO committee(id, committee_name, hod_name, principal_name, hod_verified, principal_verified) VALUES('', '$commitee_name','Shalu Chopra', 'JM Nair',0, 0)";
    echo $query;
    $result = mysqli_query($connection, $query);
    
     $sql = "CREATE TABLE $commitee_name (
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
    
   echo $sql;
    
    $result = mysqli_query($connection, $sql);

    $value = explode(".", $_FILES["excel_sheet"]["name"]);
$extension = strtolower(array_pop($value));
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel_sheet"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file
//  $output .= "<label class='text-success'>Data Inserted</ label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
//    $output .= "<tr>";
//    $student_id = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
       
    $student_name = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
       
    $class = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
       
    $rank = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
       
    $field = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
       
    $email = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
//    $add = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());   
    $query = "INSERT INTO $commitee_name(student_name, class, rank, field, email) VALUES ('$student_name', '$class', '$rank', '$field', '$email')";
    mysqli_query($connection, $query);
//       echo $query;
//    $output .= '<td>'.$name.'</td>';
//    $output .= '<td>'.$email.'</td>';
////    $output .= '<td>'.$add.'</td>';   
//    $output .= '</tr>';
   }
  } 
//  $output .= '</table>';
 }
 else
 {
//  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
    
 header("Location: http://localhost:3000/issuer_first.html");
}
?>