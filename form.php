<?php



session_start();



    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $state=$_POST['state'];
    $dob=$_POST['dob'];
    $nationality=$_POST['Nationality'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];

    $collegename=$_POST['collegename1'];
    $university=$_POST['university'];
    $degree=$_POST['degree'];
    $percentage=$_POST['percentage'];
    $grade=$_POST['grade'];
    $passingyear=$_POST['passingyear'];

    $language=$_POST['language'];
    $database=$_POST['database'];
    $framework=$_POST['framework'];
    $api=$_POST['api'];
    $companyname=$_POST['companyname'];
    $jobtitle=$_POST['jobtitle'];
    $experience=$_POST['experience'];
    $Responsibilities=$_POST['responsibilities'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    



    $conn=mysqli_connect("localhost","root","","resumebuilder");

    $cmd="INSERT INTO `resume`( `name`, `address`, `contact`, `email`, `state`, `dob`, `nationality`, `gender`, `city`, `collegename`, `university`, `degree`, `percentage`, `grade`, `passingyear`,`language`, `database1`, `framework`, `API`, `companyname`, `jobtitle`, `experience`, `responsibilities`, `startdate`, `enddate`) 
        values('$name','$address','$contact','$email','$state','$dob','$nationality','$gender','$city','$collegename','$university','$degree','$percentage','$grade','$passingyear','$language','$database','$framework','$api','$companyname','$jobtitle','$experience','$Responsibilities','$startdate','$enddate')";

       
    echo"$cmd";
       $result=mysqli_query($conn,$cmd);
       if($result)
       {
           header('location:technical1.php');
       }
       else
       {
           echo"try again";
       }
   
?>