<?php 

$expression= $_POST['expression'];
$expression1= str_replace(" ","+","$expression");
$result1 = $_POST['result1'];
$date=$_POST['date'];
echo $result1;
$conn=new mysqli("localhost","root","V#Carem9","calculator");
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
  
    $stmt = mysqli_stmt_init($conn);
    $query = "INSERT INTO calci (expression, result,date) VALUES (?,?,?)";

    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, "sss", $expression1, $result1,$date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

   
    
    
 
 
?>
