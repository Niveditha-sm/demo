<?php 



$conn=new mysqli("localhost","root","V#Carem9","calculator");
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
$result= mysqli_query( $conn,"SELECT  * FROM calci");

$data=array();
while($row=mysqli_fetch_assoc($result))
{
    $data[]=$row;
}
// print "$data ";
echo json_encode($data);

 exit();
 mysqli_close($conn);
 ?>