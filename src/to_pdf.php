<?php

include_once("db.php");
$com=$_GET['committe_id'];
$st=$_GET['student_id'];
echo $com;
echo $st;




$query="Select * from committee where id=$com";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
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
$logo="logo.png";


// echo $committe_id_dehash,$student_id_hash;
$query="select * from $committee_name where student_id=$st";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
$student_name=$row['student_name'];
$field=$row['field'];
$class=$row['class'];
$rank=$row['rank'];
$qr_code=$row['qr_image'];

 require_once('../pdfgenerator/TCPDF/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("PDF");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 13);  
      $obj_pdf->AddPage(); 
      
      
      // $content .= fetch_data();  
        $logo="logo.png";
        $organisation_name = "VIVEKANAND EDUCATION SOCIETY'S ".'<br>'."INSTITUTE OF TECHNOLOGY";
        // $committee_name="Praxis";

      $content = '

      <table>
      <tr>
      <th width="20%"></th>
      <th width="60%"></th>

      <th width="20%"></th></tr>

      <tr>   
          <td> 
          <img src="images/logo_images/'.$logo.'" style="margin: 25px 25PX 0PX 25PX"></td>
          <td>      <p class="tops"><b>'.$organisation_name.'</b></p></td>
          <td>      <img src="qrimages/'.$qr_code.'"></td>
      </tr> 
     </table>
   
      <table>      
    <tr>
      <th width="40%"></th>
      <th width="50%"></th>

      <th width="20%"></th></tr>

      <tr>   
          <td> </td>
        
          <td>      <h1 class="tops"><b>'.$committee_name.'</b></h1></td>
          <td>      </td>

      </tr>
      </table>
      <table>
         <tr>
      <th width="25%"></th>
      <th width="50%"></th>

      <th width="20%"></th></tr>

      <tr>   
          <td> </td>
        
          <td>      <b>CERTIFICATE OF APPRECIATION</b></td>
          <td>      </td>

      </tr>
       
     </table>


          <table>
         <tr>
      <th width="20%"></th>
      <th width="60%"></th>

      <th width="10%"></th></tr>

      <tr>   
          <td> </td>
        
          <td>This certificate is proudly presented to '.$student_name.' of '.$class.' for
securing '.$rank.' position '.$rank.' in the     Competition
held on 22/08/2019</td>
          <td>      </td>

      </tr>
       
     </table>

          <table>
         <tr>
      <th width="40%"></th>
      <th width="40%"></th>

      <th width="30%"></th></tr>

      <tr>   
          <td><img src="images/signature/sign1.png" style="height: 50px; width: 50px"> </td>
        
          <td><img src="images/signature/sign2.png" style="height: 50px; width: 70px"></td>
          <td><img src="images/signature/sign3.png" style="height: 50px; width: 70px"></td>

      </tr>
       
     </table>
     </table>

          <table>
         <tr>
      <th width="40%"></th>
      <th width="40%"></th>

      <th width="30%"></th></tr>

      <tr>   
          <td>'.$committee_name.'Chairperson </td>
        
          <td>Head of Department</td>
          <td>Principal</td>

      </tr>
       
     </table>






      ';  
      $obj_pdf->writeHTML($content); 
      ob_end_clean();
      $obj_pdf->Output('QuestionPaper.pdf', 'I');  
 
?>