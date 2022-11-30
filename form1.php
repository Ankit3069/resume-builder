<?php
  $name=$_POST['name'];
  $address=$_POST['address'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $state=$_POST['state'];
  $dob=$_POST['dob'];
  $nationality=$_POST['Nationality'];
  $gender=$_POST['gender'];
  $city=$_POST['city'];

  $ssc=$_POST['ssc'];
  $hsc=$_POST['hsc'];
  $graduation=$_POST['graduation1'];
  $b_ed=$_POST['b_ed'];



  $skill1=$_POST['skill1'];
  $skill2=$_POST['skill2'];
  $skill3=$_POST['skill3'];

  $cskill1=$_POST['cskill1'];
  $cskill2=$_POST['cskill2'];
  $cskill3=$_POST['cskill3'];


    $conn=mysqli_connect("localhost","root","","resumebuilder");
    $cmd="INSERT INTO `resume1`( `name`, `address`, `contact`, `email`, `state`, `dob`, `nationality`, `gender`, `city`, `ssc`, `hsc`, `graduation1`, `b_ed`, `skill1`, `skill2`, `skill3`, `cskill1`, `cskill2`, `cskill3`)
    values('$name','$address','$contact','$email','$state','$dob','$nationality','$gender','$city','$ssc','$hsc','$graduation','$b_ed','$skill1','$skill2','$skill3','$cskill1','$cskill2','$cskill3')";
    echo"$cmd";
    $result=mysqli_query($conn,$cmd);
    if($result)
    {
        header('location:form1.html');
    }
    else
    {
        echo"try again";
    }
?>