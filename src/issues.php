<?php

?>
<html>
   <head>
       <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
        <style>
            body{
                font-family: "Nunito Sans", sans-serif;
                background: #b0413e;
            }
            .nav-item .logout:hover{
		background: #fff;
		border: 1px solid #b0413e;
		color: #b0413e;
	}
    .bit_nav1{
        margin-left: 290px;

    }
    .bit_nav{
    text-decoration: none;
    color:#B0413E;

    padding-right:45px;
    letter-spacing: 1px;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 20px;
    }
    .bit_nav:hover{
    color:#bd4642; 
    }

    .bit_button{
        text-decoration: none;
        color: #fff;width:90px;
        margin-left:25px;
        background-color:#bd4642;
        font-size: 16px;
        font-family: 'Nunito Sans', sans-serif;
        box-shadow: 1px 1px 5px #CEE5F2;
        border: none;
    }
    .bit_button:hover{
        color: #bd4642;
        background: #fff;
        border: 1px solid #bd4642;
    }
    .type{
       font-size:20px; 
        color: #fff;
        margin-top: 120px;
        margin-left: 25px;


    }
            </style>
   </head>
    <body>
      <nav class="navbar-light bg-light" style="padding:20px;font-size:16px;">
	<div class="container-fluid">
		    <ul class="nav justify-content-end">
			<li class="nav-item">
				<a class="nav-link active bit_nav bit_nav1" href="#" style="color:#B0413E ">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="" style="color:#B0413E ">History</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active bit_nav" href="" style="color:#B0413E ">Profile</a>
                </li>
			<li class="nav-item ">
				<a class="logout btn bit_button" href="" style="color:#fff;background-color:#b0413e; margin-top:5px;">Logout</a>
			</li>


		</ul>
		</div>
	</nav>
      <div class="container-fluid" style="padding-top:100px;">
        <div class="row justify-content-center">
        <div class="col-md-8 ">
            
       <table class="table table-striped table-hover" style="border: 3px solid #000; background:#fff;">
                    <thead style="color:#b0413e;">
                        <tr>
                            <th>Committee Name</th>
                            <th>Comment Raised </th>
                        </tr>
                    </thead>
<?php
require_once('db.php');
//$committe_name =$_POST['committee name'];
$query = "SELECT DISTINCT committee_name, comments,issue_raised FROM committee WHERE issue_raised=1";
$result = mysqli_query($connection, $query);
//$row = mysqli_fetch_array($result);
//echo $row['comments'];
$num = mysqli_num_rows($result);
//$count = 0;
for($i=1; $i<=$num; $i++){
    $row = mysqli_fetch_assoc($result);
//    $id = $row["id"];
    $committee_name = $row["committee_name"];
//    $hod_name = $row["hod_name"];
//    $principal_name = $row["principal_name"];
//    $hod_verified = $row["hod_verified"];
//    $principal_verified = $row["principal_verified"];
    $issue_raised = $row['issue_raised'];
    $comments = $row['comments'];
?>

                    <tr> 
                        <td><?php echo $committee_name; ?></td> 
                        <td><?php echo $comments;
    ?>
       </td>
        </tr>
        <?php
}
?>
   </table>
          </div>
        </div>
        </div>
    </body>
</html>