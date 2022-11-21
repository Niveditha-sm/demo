 <?php
 echo'hi';
 $conn=new mysqli("localhost","root","V#Carem9","calculator");
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
  
    // $stmt = mysqli_stmt_init($conn);
    $result= mysqli_query( $conn,"DELETE FROM calci");
?>