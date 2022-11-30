

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Fira+Sans:ital,wght@1,600&family=Open+Sans&family=Rakkas&family=Secular+One&family=Tai+Heritage+Pro&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Fira+Sans:ital,wght@1,600&family=Open+Sans&family=Rakkas&family=Secular+One&family=Tai+Heritage+Pro&display=swap');
        body{
	margin: 0px;
	padding: 0px;
	background-image: radial-gradient(#c7c7c7 25%, #c7c7c7 74%);
	height: 100vh;
	font-family: system-ui;

}
.clearfix{
	clear: both;
}
.main{
	height: 1150px;
	width: 800px;
	background-color: white;
	box-shadow: 5px 7px 15px 5px #b9b6b6;
	margin: 20px auto;

}

.top-section{
	background-color:#151b29;
	text-align: center;
	padding: 20px;
}
.profile{
	width: 150px;
	border-radius: 50%;
}
.p1{
	color: white;
	font-size: 40px;
	font-weight: bold;
	margin: 0px;
	margin-top: 10px;
}
.p1 span{
	font-weight: 100;
	color: #c7c7c7;
}
.p2{
	font-size: 20px;
	color: #c7c7c7;
	margin: 0px;
	margin-top: 10px;
}
.col-div-4{
	width: 35%;
	float: left;

}
.col-div-8{
	width: 62%;
	float: left;
}
.line{
	border-left: 1px solid #c7c7c7;
  height: 800px;
  width: 2%;
  margin-top: 30px;
  float:left;
}
.content-box{
	padding: 20px;
}
.head{
	font-size: 20px;
	text-transform: uppercase;
	font-weight: 600;
}
.p3{
	color: #7b7b7b;
	margin-bottom: -5px;

}
.fa{
	color: #151b29;
}
.skills{
	margin-left: -20px;
	    margin-bottom: 0px;
}
.skills li{
	padding: 5px;
}
.skills li span{
	color: #7b7b7b;
}
.p-4{
	font-size: 14px;
	color: #7b7b7b;
}



.skills1{
	margin-left: 20px;
	    margin-bottom: 0px;
}
.skills1 li{
	padding: 5px;
    margin-left: 20px;
    list-style: none;
}
.skills1 li span{
	color: #7b7b7b;
}
.p-4{
	font-size: 14px;
	color: #7b7b7b;
}

.skills2{
	
	    margin-bottom: 0px;
        margin-left: 0px;
        
}
.skills2 li{
	padding: 5px;
    
    list-style: none;
}
.skills2 li span{
	color: #7b7b7b;
}
.p-4{
	font-size: 14px;
	color: #7b7b7b;
}
  a{
    background: #3498db;
    padding:15px;
    color:white;
    text-decoration:none;
    margin-left:25px;
    border-radius:5px;
    margin-top:18px !important;
  }
    </style>
</head>
<body>
    

</body>
</html>

<?php
session_start();
$conn=mysqli_connect("localhost","root","","resumebuilder");

$client_name=$_SESSION['client_name'];
$client_id=$_SESSION['client_id'];

echo "

    <div class='client-name '><h3>Welcome $client_name</div></h3>

";

?>

<?php
                $sql_obj=mysqli_query($conn,"select * from registration where name='$client_name'");
                $mysqli_result=mysqli_fetch_assoc( $sql_obj);
                $id=$mysqli_result['client_id'];
  

                $conn=mysqli_connect("localhost","root","","resumebuilder");
                // $cmd="SELECT * from resume ORDER BY id DESC";
                $cmd=mysqli_query($conn,"SELECT * from resume where user_id= '$id'");
                $row=mysqli_fetch_assoc($cmd);

                // $rowcount=mysqli_num_rows($cmd);

            
                // print_r($sql_obj);
                $id=$row['id'];
                $name=$row['name'];
                $address=$row['address'];
                $contact=$row['contact'];
                $email=$row['email'];
       
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
                $enddate=$row['enddate'];
                $language=$row['language'];
                $database1=$row['database1'];
                $framework=$row['framework'];
                $API=$row['API'];
                $user_id=$row['user_id'];
                
                
          
                
                

                echo "	
                

               <a href ='updatelite.php?id=$id& name=$name&address=$address&contact=$contact&email=$email&state=$state&dob= $dob&nationality=$nationality&
               gender=$gender&city=$city&collegename=$collegename&university=$university&degree=$degree&percentage=$percentage&companyname=$companyname&
               jobtitle=$jobtitle&experience=$experience&startdate=$startdate&enddate=$enddate&language=$language&database1=$database1&
               framework=$framework&user_id=$user_id'>update</a>
               <a href='index1.php'>Go to template page</a>
               <a href='delete.php?id=$id '>Delete</a>

               <a href='job.php?id=$id '>Apply</a>

                <div class='row col-2 mt-4 '>
                </div><div class='main'>
                <div class='top-section'>
                   
                    <p class='p1'>$name</span></p>
                    <p class='p2'>$jobtitle</p>
                </div>
                <div class='clearfix'></div>
        
                <div class='col-div-4'>
                    <div class='content-box' style='padding-left: 40px;'>
        
                        
                    <p class='head'>Contact</p>
                    <p class='p3'><i class='fa fa-phone' aria-hidden='true'></i> &nbsp;&nbsp;898392888</p>
                    <p class='p3'><i class='fa fa-envelope' aria-hidden='true'></i> &nbsp;&nbsp;dummymail.com</p>
                    <p class='p3'><i class='fa fa-home' aria-hidden='true'></i> &nbsp;&nbsp;United Kingdom</p>
                    
        
                    <br/>
                    <p class='head'>my skills</p>
                    <ul class='skills'>
                        <li><span>Web Design</span></li>
                        <li><span>Grapic Design</span></li>
                        <li><span>HTML-5</span></li>
                        <li><span>CSS-3</span></li>
                        <li><span>Java Script</span></li>
                        <li><span>Jquery</span></li>
        
                    </ul>
        
                    <br/>
                    <p class='head'>Techical skillsk</p>
             


                        <ul class='skills2'>
                        <li><span>Language:$language</span></li>
                        <li><span>Database:$database1</span></li>
                        <li><span>Framework:$framework</span></li>
                        <li><span>API:$API</span></li>

                        <li><span>Languages</span></li>
                        <li><span>Hindi</span></li>
                        <li><span>English</span></li>
                
                        
                        
        
                    </ul>
                       
        

                    <br/>

                    </div>
                </div>
                <div class='line'></div>
          
                <div class='container'>
                    <div class='row'>
                        <div class='col-6'>
                        
                        <p class='head'>profile</p>
                        <p class='p3 mb-0.3'>email:$email</p>
                        <p class='p3 mb-0.3'>Address:$address</p>
                        <p class='p3 mb-0.3'>contact:$contact</p>
                        </div>

                        <div class='col-6'>

                        
                        <p class='p3 mb-0.4'>state:$state</p>
                        <p class='p3 mb-0.4'>DOB:$dob</p>
                        <p class='p3 mb-0.4'>Nationality:$nationality</p>
                        <p class='p3 mb-0.4'>Gender:$gender</p>
                   

                    </div>
                    </div>

                    
                </div>

 
                    <br/>
                    <p class='head'>EXPERIENCE</p>
        
                   
                    <ul class='skills1'>
                        <li><span>Companyname:$companyname</span></li>
                        <li><span>Jobtitle:$jobtitle</span></li>
                        <li><span>Experience:$experience</span></li>
                        <li><span>Start date:$startdate</span></li>
                        <li><span>End date: $enddate</span></li>
                        
        
                    </ul>
        
                    <br/>
        
                    <p class='head'>Education Info</p>
                    <p class='p-2' >College:$collegename</p>
                    <p class='p-2' >University:$university</p>
                    <p class='p-2' >Degree:$degree</p>
                    <p class='p-2' >Percentage: $percentage</p>
                   
        
        
                    </div>
                </div>
        
                <div class='clearfix'></div>
        
             </div>
                "
               
       
           
           
            ?>