?php
 $con=new mysqli("localhost","root","admin@123","ecommerce");
 if(!$con){
    echo "connection is successful";

 }
else{
    die(mysqli_error());

}
?>
