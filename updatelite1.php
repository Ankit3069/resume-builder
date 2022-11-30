

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

$id1=$_GET['id'];
$sql="SELECT * from `resume` where id=$id1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$id1= $row['id'];
$name= $row['name'];
$address=$row['address'];
 $contact=$row['contact'];
       $email= $row['email'];
       $grade=$row['grade'];
       $user_id=$row['user_id'];
      $passingyear=$row['passingyear'];
       $state=$row['state'];
       $dob=$row['dob'];
       $nationality=$row['nationality'];
       $gender=$row['gender'];
       $city=$row['city'];
       $collegename=$row['collegename'];
       $university=$row['university'];
       $degree=$row['degree'];
       $percentage=$row['percentage'];
       $companyname=$row['companyname'];
       $jobtitle=$row['jobtitle'];
       $experience=$row['experience'];
       $startdate=$row['startdate'];
       $API=$row['API'];
       $enddate=$row['enddate'];
       $Responsibilities=$row['responsibilities'];
       $language=$row['language'];
       $database=$row['database1'];
       $framework=$row['framework'];
       $user_id= $_GET['user_id'];

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

    $collegename=$_POST['collegename1'];
    $university=$_POST['university'];
    $degree=$_POST['degree'];
    $percentage=$_POST['percentage'];
    $grade=$_POST['grade'];
    $passingyear=$_POST['passingyear'];

    $language=$_POST['language'];
    $database=$_POST['database1'];
    $framework=$_POST['framework'];
    $API=$_POST['API'];
    $companyname=$_POST['companyname'];
    $jobtitle=$_POST['jobtitle'];
    $experience=$_POST['experience'];
    $Responsibilities=$_POST['responsibilities'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    



    $conn=mysqli_connect("localhost","root","","resumebuilder");

    $cmd="UPDATE  `resume` set id=$id1,name='$name',address='$address',contact='$contact',email='$email',state='$state',dob='$dob',nationality='$nationality',gender='$gender',city='$city',collegename='$collegename',university='$university',degree='$degree',
    percentage='$percentage',companyname='$companyname',jobtitle='$jobtitle',experience='$experience',startdate='$startdate',
    enddate='$enddate',language='$language',database1='$database',framework='$framework' where id=$id1";

       
    echo"$cmd";
       $result=mysqli_query($conn,$cmd);
       if($result)
       {
           header('location:technical2.php');
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
<a href="technical2.php"><button type="button" class="btn btn-warning ">View Template</button></a>
<a href="logout.php"><button>logout</button>
</a>
  </div>
  <form method="post">
  <div class="container">
   <div class="row">
     <div class="col-12">
       <div class="row">
        <div class="col-6">

        <label for="name" class="form-label mt-1">ID</label>
          <input type="text" class="form-control " value=<?php echo $id1 ;?> name="name">

          <label for="name" class="form-label mt-1">Name</label>
          <input type="text" class="form-control " value=<?php echo $name ;?> name="name">

          <label for="name" class="form-label mt-1">Adrress</label>
          <input type="text" class="form-control " value= <?php echo $address ;?> name="address">

          <label for="name" class="form-label mt-1">Contact</label>
          <input type="text" class="form-control " value= <?php echo $contact ;?> name="contact">

          <label for="name" class="form-label mt-1">Email</label>
          <input type="text" class="form-control "  value= <?php echo $email ;?> name="email">

          <label for="name" class="form-label mt-1">State</label>
          <input type="text" class="form-control "  value= <?php echo $state ;?> name="state">

        </div>
        <div class="col-6">
          <label for="name" class="form-label mt-1">Date of birth</label>
          <input type="date" class="form-control "  value= <?php echo $dob ;?> name="dob">

          <label for="name" class="form-label mt-1">Nationality</label>
          <input type="text" class="form-control "  value= <?php echo $nationality ;?> name="Nationality">

          <label for="name" class="form-label mt-1">Gender</label>
          <input type="text" class="form-control " value=<?php echo $gender ;?> name="gender">

          <label for="name" class="form-label mt-1">City</label>
          <input type="text" class="form-control "  value= <?php echo $city ;?> name="city">
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
                  <input type="text" class="form-control " value= <?php echo $collegename;?> name="collegename1">

                  <label for="name" class="form-label mt-1">University</label>
                  <input type="text" class="form-control " value= <?php echo $university ;?> name="university">

                  <label for="name" class="form-label mt-1">Degree</label>
                  <input type="text" class="form-control " value= <?php echo $degree ;?> name="degree">
              </div>

              <div class="col-6">
                  <label for="name" class="form-label mt-1">Percentage</label>
                  <input type="text" class="form-control " value= <?php echo $percentage ;?> name="percentage">

                  <label for="name" class="form-label mt-1">Grade</label>
                  <input type="text" class="form-control " value= <?php echo $grade ;?> name="grade">

                  <label for="name" class="form-label mt-1">passing year</label>
                  <input type="number" class="form-control " value= <?php echo $passingyear ;?> name="passingyear">
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
                    <input type="text" class="form-control " value= <?php echo $language ;?> name="language">

                    <label for="name" class="form-label mt-1">Database</label>
                    <input type="text" class="form-control " value= <?php echo $database ;?> name="database1">

                    <label for="name" class="form-label mt-1">framework</label>
                    <input type="text" class="form-control " value= <?php echo $framework ;?> name="framework">

                    <label for="name" class="form-label mt-1">API</label>
                    <input type="text" class="form-control " value= <?php echo $API ;?> name="API">
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
                    <input type="text" class="form-control "  value= <?php echo $companyname ;?> name="companyname">

                    <label for="name" class="form-label mt-1">Job title</label>
                    <input type="text" class="form-control "  value= <?php echo $jobtitle ;?> name="jobtitle">

                    <label for="name" class="form-label mt-1">Experience</label>
                    <input type="text" class="form-control "  value= <?php echo $experience ;?> name="experience">

                    <label for="name" class="form-label mt-1">Responsibilities</label>
                    <input type="text" class="form-control " placeholder="Add your job role description here"  value= <?php echo $Responsibilities ;?> name="responsibilities">



                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <label for="name" class="form-label mt-2">from(Date of joining)</label>
                    <input type="text" class="form-control " name="startdate">




                </div>
                <div class="col-4">
                    <label for="name" class="form-label mt-2">to(End date)</label>
                    <input type="text" class="form-control " name="enddate">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container one">
    <div class="row ">
      <div class="col-12">
        <div class="row col-2 mt-3 ">
            <input class="btn btn-warning mx-35" name="submit" type="submit" value="update" />    
            </div>


    
      </div>
    </div>
  </div>
  
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  

    
  </body>
</html>


