

<?php


session_start();
$conn=mysqli_connect("localhost","root","","resumebuilder");

$client_name=$_SESSION['client_name'];
$client_id=$_SESSION['client_id'];
echo "

    <div class='client-name '><h3>Welcome $client_name</div></h3>

";
$sql_obj=mysqli_query($conn,"select * from registration where name='$client_name'");

$mysqli_result=mysqli_fetch_assoc( $sql_obj);
$id=$mysqli_result['client_id'];


if(isset($_REQUEST['submit'])){
 
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $state=$_POST['state'];
    $dob=$_POST['dob'];
    $nationality=$_POST['Nationality'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];

    $collegename=$_POST['collegename'];
    $university=$_POST['university'];
    $percentage=$_POST['percentage'];
    $grade=$_POST['grade'];
    $passingyear=$_POST['passingyear'];

    $language=$_POST['language'];
    $database=$_POST['database1'];
    $framework=$_POST['framework'];
    $api=$_POST['API'];
    $companyname=$_POST['companyname'];
    $jobtitle=$_POST['jobtitle'];
    $experience=$_POST['experience'];
    $hobby1=$_POST['hobby1'];
    $hobby2=$_POST['hobby2'];
    $hobby3=$_POST['hobby3'];
    $curriculum1=$_POST['curriculum1'];
    $curriculum2=$_POST['curriculum2'];
    $curriculum3=$_POST['curriculum3'];
  
    



    $conn=mysqli_connect("localhost","root","","resumebuilder");

    $cmd="INSERT INTO `simpleform`( `name`, `address`, `contact`, `email`, `state`, `dob`, `nationality`, `gender`, `city`, `collegename`, `university`,  `percentage`, `grade`, `passingyear`,`language`, `database1`, `framework`, `API`, `companyname`, `jobtitle`, `experience`,`hobby1`, `hobby2`,`hobby3`, `curriculum1`,`curriculum2`, `curriculum3`, `user_id` ) 
        values('$name','$address','$contact','$email','$state','$dob','$nationality','$gender','$city','$collegename','$university','$percentage','$grade','$passingyear','$language','$database','$framework','$api','$companyname','$jobtitle','$experience','$hobby1','$hobby2','$hobby3','$curriculum1','$curriculum2','$curriculum3','$id')";

       
    echo"$cmd";
       $result=mysqli_query($conn,$cmd);
       if($result)
       {
           header('location:simple2.php');
       }
       else
       {
           echo"try again";
       }
    }
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>


    <style>

@import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fira+Sans:ital,wght@1,600&family=Open+Sans&family=Rakkas&family=Tai+Heritage+Pro&display=swap');
body{

 
box-sizing: border-box;
background:rgb(232,232,232)!important;
overflow:scroll;
}
h1{

font-size: 4rem !important;
display: inline-block !important;
font-family: 'Abril Fatface', cursive;}

.register{

  background-color: black;
  color: yellow;
  border-radius: 5px ;
  padding: 3px;
}
.register .nav-link {
  color: yellow !important;
}

p{

  font-family: 'Tai Heritage Pro', serif;
}

li a {
  color:white !important;
  margin-right: 35px;
  padding: 10px;
  background-color: black;
  border-radius: 5px;
  text-decoration: none;
}


li  :hover{

  background-color: white;
  color:black !important;
  text-decoration: none;
}

h3{
  margin-left: 15px;
}

.container{

  background-color: white;
  border: 2px solid rgb(232,232,232)!important;;
  border-radius: 5px;
  padding: 25px;
  box-shadow: 0 4px 4px rgba(0,0,0,0.08), 
                0 10px 10px rgba(0,0,0,0.12), 
                0 10px 10px rgba(0,0,0,0.16), 
                0 9px 9px rgba(0,0,0,0.20);
}
.btn1{
  width:100px;
  height:50px;

}
.one{
  margin-top: 10px;
}
input{
  border:none;
}

.text1{
    width:85%;
    margin-left: 110px;
    align-items: center;
    text-align: center;
    border-radius: 10px;
    margin-top: 18px;
    background-color: #3498db;
}
nav{


  position: sticky !important;
  top: 0 !important;
}

 </style>
  </head>
  <body>

   </section>
   

<section>
  <div class="p-2 mb-2 main text-white text1">
<h3>Personal Information</h3>
<a href="simple2.php"><button type="button" class="btn btn-warning ">View Template</button></a>
<a href="logout.php"><button>logout</button>
</a>
  </div>
  <form method="post">
  <div class="container">
   <div class="row">
     <div class="col-12">
       <div class="row">
        <div class="col-6">
          <label for="name" class="form-label mt-1">Name</label>
          <input type="text" class="form-control " name="name">

          <label for="name" class="form-label mt-1">Adrress</label>
          <input type="text" class="form-control " name="address">

          <label for="name" class="form-label mt-1">Contact</label>
          <input type="text" class="form-control " name="contact">

          <label for="name" class="form-label mt-1">Email</label>
          <input type="text" class="form-control " name="email">

          <label for="name" class="form-label mt-1">State</label>
          <input type="text" class="form-control " name="state">

        </div>
        <div class="col-6">
          <label for="name" class="form-label mt-1">Date of birth</label>
          <input type="date" class="form-control " name="dob">

          <label for="name" class="form-label mt-1">Nationality</label>
          <input type="text" class="form-control " name="Nationality">

          <label for="name" class="form-label mt-1">Gender</label>
          <input type="text" class="form-control " name="gender">

          <label for="name" class="form-label mt-1">City</label>
          <input type="text" class="form-control " name="city">
        </div>
      </div>
    </div>
  </div>
  </div>

  </section>

  </div>

  <!-- education------------------ -->

  <div class="p-2 mb-2 text-white text1">
    <h3>Education Information</h3>
    
  </div>
  <div class="container">
  <div class="row">
      <div class="col-12">
          <div class="row">
              <div class="col-6">
                  <label for="name" class="form-label mt-1">College Name</label>
                  <input type="text" class="form-control " name="collegename">

                  <label for="name" class="form-label mt-1">University</label>
                  <input type="text" class="form-control " name="university">

                 
              </div>

              <div class="col-6">
                  <label for="name" class="form-label mt-1">Percentage</label>
                  <input type="text" class="form-control " name="percentage">

                  <label for="name" class="form-label mt-1">Grade</label>
                  <input type="text" class="form-control " name="grade">

                  <label for="name" class="form-label mt-1">passing year</label>
                  <input type="number" class="form-control " name="passingyear">
              </div>
          </div>
      </div>
  </div>
  </div>

 
   <div class="container one">
    <div class="row ">
    <div class="col-12">

      
     
      </div>  
    </div>
   </div>
  </div>

  <div class="p-2 mb-2  text-white text1">
    <h3>Technical skills</h3>
    
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10 skills">
                    <label for="name" class="form-label mt-1">Languages</label>
                    <input type="text" class="form-control " name="language">

                    <label for="name" class="form-label mt-1">Database</label>
                    <input type="text" class="form-control " name="database1">

                    <label for="name" class="form-label mt-1">framework</label>
                    <input type="text" class="form-control " name="framework">

                    <label for="name" class="form-label mt-1">API</label>
                    <input type="text" class="form-control " name="API">
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="p-2 mb-2  text-white text1">
    <h3>Work Experience</h3>
    
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <label for="name" class="form-label mt-1">Company Name</label>
                    <input type="text" class="form-control " name="companyname">

                    <label for="name" class="form-label mt-1">Job title</label>
                    <input type="text" class="form-control " name="jobtitle">

                    <label for="name" class="form-label mt-1">Experience</label>
                    <input type="text" class="form-control " name="experience">

                    <label for="name" class="form-label mt-1">Responsibilities</label>
                    <input type="text" class="form-control " placeholder="Add your job role description here" name="collgename">



                </div>
            </div>

        </div>
    </div>
</div>



<div class="p-2 mb-2  text-white text1">
    <h3>Hobbies</h3>
    
</div>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    
                    <input type="text" class="form-control " name="hobby1">

                   
                    <input type="text" class="form-control " name="hobby2">

                   
                    <input type="text" class="form-control " name="hobby3">

                    



                </div>
            </div>

        </div>
    </div>
</div>


<div class="p-2 mb-2  text-white text1">
    <h3>Curriculum activities</h3>
    
</div>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    
                    <input type="text" class="form-control " name="curriculum1">

                   
                    <input type="text" class="form-control " name="curriculum2">

                   
                    <input type="text" class="form-control " name="curriculum3">

                    



                </div>
            </div>

        </div>
    </div>
</div>
<div class="container one">
    <div class="row ">
      <div class="col-12">
        <div class="row col-2 mt-3 ">
            <input class="btn btn-warning mx-35" name="submit" type="submit" value="Register" />    
            </div>


    
      </div>
    </div>
  </div>
  
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  

    
  </body>
</html>


