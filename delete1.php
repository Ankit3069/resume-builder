<?php
$conn=mysqli_connect("localhost","root","","resumebuilder");

 $info=$_GET['simple_id'];
$query="DELETE from simpleform WHERE simple_id=$info";
       $data = mysqli_query($conn,$query);
       if($data)
       {
        header('location:simple2.php');

         
       }else{
        echo "failed to delete";
       }
?>