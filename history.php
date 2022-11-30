<?php

$pid=$_GET['pid'];
session_start();
$client_id=$_SESSION['client_id'];


$conn=mysqli_connect("localhost","root","","ecommerce");

$cmd="insert into cart(client_id,pdt_id) values($client_id,$pid)";
$sql_res=mysqli_query($conn,$cmd);
if($sql_res)
{
    header('location:client_view.php');
}
else
{
    echo "Error in Adding the Products";
}

// receive a pdt id
// store the pdt id in a cart table along with the client_id


?>