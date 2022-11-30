<?php
session_start();
$conn=mysqli_connect("localhost","root","","resumebuilder");

$client_name=$_SESSION['client_name'];
$client_id=$_SESSION['client_id'];



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Document</title>
  <style>
@charset "UTF-8";

* {
    min-height: 0;
    min-width: 0;
    box-sizing: border-box;
    transform-origin: 0px 0px 0px;
}

p:blank, li:blank, div:blank, section:blank {
    display: none;
}

p:empty, li:empty, div:empty, section:empty {
    display: none;
}

p:-moz-only-whitespace, li:-moz-only-whitespace, div:-moz-only-whitespace, section:-moz-only-whitespace {
    display: none;
}

/* Page Variables */

:root {
    --main-width: 74%;
    --header-height: 1.2in;
    --sidebar-width: calc(100% - var(--main-width));
}

body {
    font-size: 0.95em;
    margin: 0 auto;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-tap-highlight-color: transparent;
    text-rendering: optimizeLegibility;
    text-decoration-skip: ink;
    hyphens: auto;
}

#save > section:first-of-type {
    display: flex;
    flex-direction: row;
}

.summary {
    font-size: 105%;
}

/* Misc */

img {
    max-width: 100%;
}

p {
    margin-top: 0;
    margin-bottom: 0;
}

abbr[title] {
    text-decoration: none;
    border: none;
}

ul {
    margin: 0;
    padding: 0;
}

li {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

li + li {
    margin-top: 0.4em;
}

.fa, .fab {
    text-align: center;
    min-width: 1em;
}

li .fa, li .fab {
    margin-right: 0.3em;
}

/* Page layout */

#save > section:first-of-type > aside {
    flex-basis: var(--sidebar-width);
    padding: 0.1618in 0 0.1618in 0.1618in;
    display: flex;
    flex-direction: column;
}

#save > section:first-of-type > aside > section + section {
    margin-top: 2em;
}

#save > section:first-of-type > aside > section:last-child {
    margin-top: auto;
} 

#save > section:first-of-type > section {
    flex-basis: var(--main-width);
    display: flex;
    flex-direction: column;
}

#save > section:first-of-type > section > header {
    flex-basis: var(--header-height);
    flex-grow: 0;
    padding: 0.1618in;
}

#save > section:first-of-type > section > section {
    flex-grow: 1;
    padding: 0.1618in;
    padding-top: 0;
    display: flex;
    flex-direction: column;
}

#save > section:first-of-type > section > section > section + section {
    margin-top: 1em;
}

#save > section:first-of-type > section > section > section:last-child {
    margin-top: auto;
}

.references address {
    font-style: normal;
    font-weight: 300;
}

.references address:first-line {
    font-weight: 400;
}

.references address + address,
.references address + p {
    padding-top: 0.5em;
}

/* Skills */

.skills {
    font-size: 92%;
}

.skills > ul:after {
    content: '';
    display: table;
    clear: both;
}

.skills > ul > li {
    display: block;
    float: left;
    margin: 6px 6px 0 0;
}

.skills > ul > li > span {
    background-color: #f5f5f5;
    border: 1px solid rgba(45, 45, 45, 0.1618);
    border-radius: 3px;
    color: #333;
    padding: 4px 8px;
    display: inline-block;
}

/* Experience & Education */

.education ol,
.experience ol {
    margin: 0;
    padding: 0;
}

.experience ol {
    flex-wrap: wrap;
    display: flex;
    flex-direction: row;
}

.experience ol > li {
    margin: 0;
    padding: 0;
    flex-basis: 100%;
    font-weight: 300;
}

.education ol > li {
    font-weight: 300;
}

.experience ol > li + li {
    margin-top: 1em;
}

.education ol > li div,
.experience ol > li header {
    display: flex;
    flex-direction: row;
}

.experience ol > li > span,
.education ol > li p,
.experience ol > li header p {
    font-weight: 400;
}

.experience ol > li header p {
    font-size: 110%;
}

.education ol > li div > *:last-child,
.experience ol > li header > *:last-child {
    margin-left: auto;
}

.experience ol > li ul {
    padding-top: 0.5em;
}

.experience ol > li ul li {
    list-style-type: circle;
    margin-left: 1.618em;
}






/* Typography */

body, .sanserif {
    font-family: "Montserrat", "Trebuchet MS", Helvetica, sans-serif;
}

p, .serif {
    font-family: "Cardo", Georgia, serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	font-weight: 400;
	letter-spacing: -.1rem;
	margin-bottom: 1rem;
    margin-top: 0;
}

h1 {
	font-size: 3.6rem;
    line-height: 1.2;
}

h2, .section-title {
	font-size: 2.8rem;
    line-height: 1.25;
}

h3 {
	font-size: 2.2rem;
    line-height: 1.3;
}

h4 {
	font-size: 1.618rem;
	letter-spacing: -.08rem;
    line-height: 1.35;
}

h5 {
	font-size: 1.4rem;
	letter-spacing: -.05rem;
    line-height: 1.5;
}

h6 {
	font-size: 1.2rem;
	letter-spacing: 0;
    line-height: 1.4;
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
  .top{
    margin-top:15px;
  }




</style>
</head>

<body>

</body>
</html>



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
                
<div class='top'>
<a href ='updatelite1.php?id=$id& name=$name&address=$address&contact=$contact&email=$email&state=$state&dob= $dob&nationality=$nationality&
gender=$gender&city=$city&collegename=$collegename&university=$university&degree=$degree&percentage=$percentage&companyname=$companyname&
jobtitle=$jobtitle&experience=$experience&startdate=$startdate&enddate=$enddate&language=$language&database1=$database1&
framework=$framework&user_id=$user_id'>update</a>
<a href='index1.php'>Go to template page</a>
<a href='delete.php?id=$id '>Delete</a>

<a href='job.php?id=$id '>Apply</a>
</div>

        <section id='save'>
            <section class='sheet'>
                <aside>
                    <section class='contact'>

    <h6>Contact</h6>
                        <ul>
                            <li>
                                <p><i class='fa fa-map-marker-alt' title='Location'></i>Address:  $address</p>
                            </li>
                            <li>
                                <p><i class='fa fa-phone' title='Cell phone'></i>Contact:  $contact</p>
                            </li>
                            <li>
                                <p><i class='fa fa-envelope' title='Email'></i>State:  $state</p>
                            </li>
                            <li>
                                <p><i class='fa fa-globe-americas' title='Website'></i>D.O.B:  $dob</p>
                            </li>
                            <li>
                                <p><i class='fab fa-github' title='GitHub'></i>Gender: $gender</p>
                            </li>
                            <li>
                            <p><i class='fab fa-github' title='GitHub'></i>City;  $city</p>
                        </li>
                        </ul>
                    </section>
                    <section class='skills'>

 
                        <h6>Technical Skills</h6>
                        <ul>
                            <li><span>$language</span></li>
                            <li><span>$database1</span></li>
                            <li><span>$framework</span></li>
                            <li><span>Data Visualization</span></li>
                            <li><span>$API</span></li>
                        </ul>
                    </section>
                    <section class='skills'>
                       
                        <h6>Technical Skills</h6>
                        <ul>
                            <li><span>$language</span></li>
                            <li><span>$database1</span></li>
                            <li><span>$framework</span></li>
                            <li><span>Data Visualization</span></li>
                            <li><span>$API</span></li>
                        </ul>
                    </section>

                </aside>
                <section>
                    <header class='name' aria-label='Joe Smith'>
                       
                            <svg width='257px' height='35px' viewBox='0 0 257 35' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                <g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' font-family='Montserrat-Regular, Montserrat' font-size='48' font-weight='normal'>
                                    <g id='Letter' transform='translate(-54.000000, -140.000000)' fill='#484848'>
                                        <text id='JOE-SMITH'>
                                            <tspan class='mx-5' x='54.728' y='174'>$name</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                      
                        <h6>$jobtitle</h6>
                        <hr />
                    </header>
                    <section>


                        <section class='experience'>
                        
                            <h6 class='mx-5'>Experience</h6>
                            <ol class='mx-5'>
                                <li>
                                    <header>
                                        <p class='sanserif'>Compamy name:$companyname</p>
                                        <time></time>
                                    </header>
                                  
                                   
                                </li>
                                <li>
                                    <header>
                                        <p class='sanserif'> Jon title: $jobtitle</p>
                                        <time></time>
                                    </header>
                                    
                                   
                                </li>
                                <li>
                                    <header>
                                        <p class='sanserif'>Experience: $experience</p>
                                        <time></time>
                                    </header>

                                <li>
                                    <header>
                                        <p class='sanserif'>Joining Date: $startdate</p>
                                        <time></time>
                                    </header>
                                    </li>

                                    <li>
                                    <header>
                                        <p class='sanserif'>Last date: $enddate</p>
                                        <time></time>
                                    </header>
                                    </li>


                            </ol>
                        </section>
                        <section class='education'>

                            <h6 class='mx-5'>Education</h6>
                            <ol class='mx-5'>
                                <li>
                                    <div>
                                        <p class='sanserif'>College Name: $collegename</p>
                                        <time></time>
                                    </div>
                                    <div>
                                        <span class=' mt-2'>University: $university</span>
                                        <span></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p class='sanserif mt-2'> Degree: $degree</p>
                                        <time></time>
                                    </div>
                                    <div>
                                        <span class=' mt-2'>Percentage: $percentage</span>
                                        <span></span>
                                    </div>
                                </li>
                            </ol>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <!-- Script to make elements authorable and save changes to localStorage -->
        <script type='text/javascript' src='./index.js'></script>
    </body>
    <!-- Developed by Tom Barrasso. https://barrasso.me -->
</html>




";
?>