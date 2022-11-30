<?php
$conn=mysqli_connect("localhost","root","","resumebuilder");

 $info=$_GET['id'];
$query="DELETE from resume WHERE id=$info";
       $data = mysqli_query($conn,$query);
       if($data)
       {
        header('location:technical1.php');

         
       }else{
        echo "failed to delete";
       }
?>