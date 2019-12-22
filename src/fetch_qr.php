<?php

require_once('db.php');
$query="Select link from sindhu";
$res=mysqli_query($connection,$query); 
$num=mysqli_num_rows($res);
//echo $num;
//echo "<br>";
$count=0;
$links = array();

//$row=mysqli_fetch_assoc($res);
//echo json_encode($row);
$dummy="";
while($count!=$num){
    $count=$count+1;
    $row=mysqli_fetch_assoc($res);
//    echo $row['link'];
    $li=$row['link'];
//    echo "<br>";
    if($count==1)
        $dummy = $li;
    else
        $dummy=$dummy.",".$li;
    array_push($links,$li);
}
//echo "<br>";
//echo "hello";
//print_r($links);
//echo json_encode($row);
//echo $dummy;

//$orderid=$_POST['orderId'];
//$query="select hashdata,product_quantity from wholesaler_order where wholesaler_order_id=$orderid";
//$res=mysqli_query($connection,$query);
//$row=mysqli_fetch_assoc($res);

$a = "s,a,b,c,d,e,f";
echo json_encode($a);
?>