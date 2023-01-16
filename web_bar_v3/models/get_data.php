<?php
    $getter=$_GET['getter'];
    $conn=mysqli_connect("localhost","root","","italok_test");

    switch($getter){
        case "Alcohol1": 
            $sql="SELECT * FROM `product` WHERE alcohol='1' AND prod_type='Drinks'";
            break;
        case "Alcohol0": 
            $sql="SELECT * FROM `product` WHERE alcohol='0' AND prod_type='Drinks'";
            break;
        case "Temper0": 
            $sql="SELECT * FROM `product` WHERE temperature='0' AND prod_type='Drinks'";
            break;
        case "Temper1": 
            $sql="SELECT * FROM `product` WHERE temperature='1' AND prod_type='Drinks'";
            break;
        case "Etel":
            $sql="SELECT * FROM `product` WHERE prod_type='Food'";
            break;
        case "Ragcsa":
            $sql="SELECT * FROM `product` WHERE prod_type='Snack'";
            break;
        default:
            $sql="SELECT * FROM `product`";
            break;
    }

    $result=mysqli_query($conn,$sql);

    $data = array();

    while ($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }

    echo json_encode($data);

?>