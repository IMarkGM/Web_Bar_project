<?php
if(isset($_POST['name'])){
     $name=$_POST['name'];
     $path=$_POST['path'];
     $alcohol=$_POST['alcohol'];
     $temperature=$_POST['temperature'];
     $type=$_POST['type'];

     $conn=mysqli_connect("localhost","root","","italok_test");

     $sql="INSERT INTO `product`(`name`, `path`, `alcohol`, `temperature`, `prod_type`) VALUES ('$name','$path','$alcohol','$temperature','$type')";

     $result=mysqli_query($conn,$sql);

     if($result == true){
        echo "<h3> Inserted....!</h3>";
     }
}


?>