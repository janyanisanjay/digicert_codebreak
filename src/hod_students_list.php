<?php
 require_once("db.php");
//$generation_id=$_GET['generation_id'];
//$generation_id=2;
//echo $generation_id;
$committee_id = $_GET['committee_id'];  
function display_students(){
    global $connection;
     //$generation_id = $_GET['generation_id'];
     //$query="Select * from generation where generation_id = $generation_id";
     //$result = mysqli_query($connection , $query);
     //$row = mysqli_fetch_array($result);
     //$commitee_name = $row['commitee_name'];
     //$template_id=$row['template_id'];
//     $organisation_id = $row['organisation_id'];
    // $query1="Select * from organisation where organisation_id = $organisation_id";
    // $result1 = mysqli_query($connection, $query1);
    // $row1 =mysqli_fetch_array($result1);
    // $organisation_name = $row1['organisation_name'];
    // $organisation_name = strtolower($organisation_name);
//    $commitee_name = 'csi';
//    $organisation_name = 'rait';
//    echo $committee_id;
    $committee_id = $_GET['committee_id'];
    $query="Select * from committee where id = $committee_id";
     $result = mysqli_query($connection , $query);
     $row = mysqli_fetch_array($result);
     $committee_name = $row['committee_name'];
     $query2 = "select * from $committee_name group by student_name";
    //echo $query2
    $result2 = mysqli_query($connection , $query2);
    while($row2 = mysqli_fetch_assoc($result2)){
        $student_name = $row2['student_name'];
        $class = $row2['class'];
        $rank = $row2['rank'];
        $field= $row2['field'];
        echo"<tr>";
        echo"<td>{$student_name}</td>";
        echo"<td>{$class}</td>";
        echo"<td>{$rank}</td>";
        echo"<td>{$field}</td>";
        echo"</tr>";
    }
}
//echo $committee_id;
 
?>






<html>

<head>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="toastr.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <style>
        body{
	font-family: "Nunito Sans", sans-serif;
	
/*	background:#f8f8f8;*/
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
    <div class="container-fluid">
        <div class="row">
            <?php
            
            ?>
            
            <div class="col-md-5" style="overflow: scroll; height:89%;">
                <table class="table table-striped table-hover">
                    <thead style="color:#b0413e;">
                        <tr>
                            <th>Student Name</th>
                            <th>Class</th>
                            <th>Rank</th>
                            <th>Field</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                display_students();
        ?>
                        
                    </tbody>
                </table>

            </div>
            <!--col-md-5-->
            <div class="col-md-7" style="background-color: #b0413e; padding: 20px;">
                <div>
                    <img src="images/t4.png" alt="" style="height: 500px; width: 650px; padding: 30px; margin: 30px; margin-left: 100px;">
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                           <a href="hod_verify.php?committee_id=<?php echo $committee_id; ?>" type="btn" name="verify" class="btn btn-default" style="width: 100px; background-color: white; color: #008000; font-size: 20px;  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" > Verify
                       <i class="fa fa-check"></i></a>     
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width: 100px; background-color: white; color: #b0413e; font-size: 20px;  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">Reject
                            <i class="fa fa-close"></i></button>               
                        </div>
                    </div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title" style="color:#b0413e;">Comment The Concern</h4>
         <button type="button" class="close" data-dismiss="modal" style="color:#b0413e;">&times;</button>
          
        </div>
        <form action="comment_insert.php" method="GET">
        <div class="modal-body">
         <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Comments..." name="comment"> 
            </div>
          
        </div>
         <div class="modal-footer">
          <button type="submit" class="btn btn-default" style="background:#b0413e; color:#fff;">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background:#b0413e; color:#fff;">Close</button>
        </div>
          </form>
      </div>
      
    </div>
  </div>
                      
                      <!--                       <input type="text" value="" name ="committee_id">-->
                       
                       <!-- <form onSubmit="App.fetchStudents(); return false; " action="#">
                           <button type="submit" class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2); background-color: #b0413e; padding: 10px; width: 25%; margiin-left: 30px; margin-top:15px; color: white;">Submit</button>
                       </form> -->
<!--                        <button type="submit"  name="verify" class="btn btn-default" style="width: 100px; background-color: white; color: #b0413e; font-size: 20px;  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" > Verify <i class="fa fa-check"></i></button>-->
                    </div>
                </div>
            </div>

        </div>
        <!--row-->
    </div>
    <!--container_fluid-->
    <!--Verify Modal-->
<?php       
//        
//        
//        $query="INSERT INTO committee(id,committee_name,hod_name,principal_name,hod_verified,principal_verified,issue_raised,comments) VALUES()  "
    
?>
   
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendor/@fortawesome/fontawesome-free/js/fontawesome.min.js"></script>
    <script src="toastr.min.js"></script>
    
</body>

</html>
