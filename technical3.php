<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Document</title>
	<style>
		.left{
			
			height: 90vh;
		}

	.top{
		margin-top: 35px;
	}
	.top p{
		font-weight:bolder;
	}

	.top1 p{
		font-weight:bolder;
	}


	.main{
		margin-top: 10px;
	}

	h1{
       
        color: #66cc99 ;
    }

	h2{
       
	   color: #66cc99 ;
   }

   .right{
	margin-top: 35px;
   }

   .right p{
	font-weight:bolder;
   }

   .bottom p{
	font-weight:bolder;
   }


   .right1{
	margin-top: 35px;
   }

   .container1{
   
   width:90%;
 
   border-radius: 5px;
   box-shadow: 0 4px 4px rgb(0 0 0 / 8%), inset 20px -5px 0px 1px rgb(0 0 0 / 12%), 0 10px 10px rgb(0 0 0 / 16%), 0 9px 9px rgb(0 0 0 / 20%);
}
	</style>
</head>
<body>

</body>
</html>


<?php
$conn=mysqli_connect("localhost","root","","resumebuilder");
$cmd="SELECT * from resume ORDER BY id DESC ";

$sql_obj=mysqli_query($conn,$cmd);
$row=mysqli_fetch_assoc($sql_obj);
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
$passingyear=$row['passingyear'];
$language=$row['language'];
$database1=$row['database1'];
$framework=$row['framework'];
$API=$row['API'];

echo "
<div class='container1'>
<div class='container main'>
<div class='row'>
	<div class='col-4 left'>
		<h1>$name</h1>
		<div class='top'>
			<P>Email : $email</P>
			<P>Address : $address</P>
			<P>Contact : $contact</P>
			<P>DOB : $dob</P>
			<P>City : $city</P>
			<P>Gender : $gender</P>
		</div>

		<div class='top1'>
			<h2>Technical skills</h2>
			<p> Language:$language</p>
			<p> Database: $database1</p>
			<p> Framework: $framework</p>
			<p> API: $API</p>
		</div>

	</div>
		
	<div class='col-8 rightmain'>
		<div class='container'>
			<div class='row'>
				<h2> Work Experience</h2>
				<div class='col-6 right'>
					
					<p>Companyname :</p>
					<p>Jobtitle :</p>
					<p>Experience :</p>
					<p>Joining date  :</p>
				
				</div>

				<div class='col-6 right1'>
					<p>$companyname</p>
					<p>$jobtitle</p>
					<p>$experience</p>
					<p>$startdate</p>
				</div>
			</div>
		</div>

		<div class='container'>
			<div class='row'>
				<h2> Education</h2>
				<div class='col-6 bottom'>
					
					<p>College name</p>
					<p>University</p>
					<p>Degree</p>
					<p>Percentage</p>
					<p>Passing year</p>
				
				</div>

				<div class='col-6 '>
					<p>$collegename</p>
					<p>$university</p>
					<p>$degree</p>
					<p>$percentage</p>
					<p>$passingyear</p>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
</div>"
	

?>