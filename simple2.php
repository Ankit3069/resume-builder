

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
                $cmd=mysqli_query($conn,"SELECT * from simpleform where user_id= '$id' ");
                // $cmd=mysqli_query($conn,"SELECT * from simpleform where user_id= '$id'");

                $row=mysqli_fetch_assoc($cmd);

                // $rowcount=mysqli_num_rows($cmd);

            
                // print_r($sql_obj);
                $simple_id=$row['simple_id'];
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
                $percentage=$row['percentage'];
                $companyname=$row['companyname'];
                $jobtitle=$row['jobtitle'];
                $experience=$row['experience'];

                $language=$row['language'];
                $database1=$row['database1'];
                $framework=$row['framework'];
                $API=$row['API'];
                $hobby1=$row['hobby1'];
                $hobby2=$row['hobby2'];
                $hobby3=$row['hobby3'];
                $curriculum1=$row['curriculum1'];
                $curriculum2=$row['curriculum2'];
                $curriculum3=$row['curriculum3'];
                $user_id=$row['user_id'];

echo "
<a href ='updatesimplelite.php?simple_id=$simple_id& name=$name&address=$address&contact=$contact&email=$email&state=$state&dob= $dob&nationality=$nationality&
               gender=$gender&city=$city&collegename=$collegename&university=$university&percentage=$percentage&companyname=$companyname&
               jobtitle=$jobtitle&experience=$experience&language=$language&database1=$database1&
               framework=$framework&user_id=$user_id&hobby1=$hobby1&hobby2=$hobby2'&hobby3=$hobby3&curriculum1=$curriculum1&curriculum2=$curriculum2&curriculum3=$curriculum3>update</a>
               <a href='index1.php'>Go to template page</a>
               <a href='delete1.php?simple_id=$simple_id '>Delete</a>

<body id='top'>
<div id='cv' class='instaFade'>
<div class='mainDetails'>
    <div id='name'>
        <h1 class='quickFade delayOne'>$name</h1>
    </div>
    


        <div class='clear'></div>
        <br />
    </section>

    <section>
        <div class='sectionTitle'>
            <h1>Personal Information</h1>
        </div>
        
        <div class='sectionContent'>
            <article>
            <div class='container'>
            <div class='row'>
            <div class='col-6'>
            <p class='subDetails'>Address:</p>
            <p class='subDetails'>Contact:</p>
            <p class='subDetails'>Email: </p>
            <p class='subDetails'> State:</p>
            <p class='subDetails'>D.O.B:</p>
            <p class='subDetails'> Nationality: </p>
            <p class='subDetails'>Gender: </p>
            <p class='subDetails'> City:</p>
            </div>
            <div class='col-6'>
            <p class='subDetails'> $address</p>
            <p class='subDetails'> $contact</p>
            <p class='subDetails'> $email</p>
            <p class='subDetails'> $state</p>
            <p class='subDetails'>$dob</p>
            <p class='subDetails'>  $nationality</p>
            <p class='subDetails'>  $gender</p>
            <p class='subDetails'>$city</p>
     
            </div>
            </div>
            </div>
                
              

               
            </article>
 
    </section>









    <section>
        <div class='sectionTitle'>
            <h1>Education</h1>
        </div>
        
        <div class='sectionContent'>
         
            <article>
                <span class='contentHeader'>College: $collegename</span>
                <span class='contentDate'>Percentage: $percentage</span>
                <p class='subDetails'>University: $university</p>
            </article>
        </div>
        <div class='clear'></div>
        <br />
    </section>







    <section>
        <div class='sectionTitle'>
            <h1>Experience</h1>
        </div>
        
        <div class='sectionContent'>
            
            <article>
              
               
                <p class='subDetails'>
                    <ul>
                        <li>$companyname</li>
                        <li>$jobtitle</li>
                        <li>$experience</li>
                    </ul>
                </p>
            </article>
            <br />
            <article>
               
            </article>

        </div>
        <div class='clear'></div>
    </section>

    <section>
        <div class='sectionTitle'>
            <h1>Technical Skills</h1>
        </div>

        <div class='publications'>
            <article>
            <ol>
                <li>$language </li>
                <li>$database1</li>
                <li>$API</li>
            </ol>
            </article>
        </div>
        <div class='clear'></div>
    </section>

    <section>
        <div class='sectionTitle'>
            <h1>Awards</h1>
        </div>
        
        <div class='sectionContent'>
            <article>
                <span class='contentHeader'>Time turner</span>
                <span class='contentDate'>August 2003</span>
                <p class='subDetails'>Was entrusted with the use of a time turner to allow enrollment in overlapping courses at Hogwarts</p>
            </article>
        </div>

        <div class='clear'></div>
        <br />
    </section>

    <section>
        <div class='sectionTitle'>
            <h1>Curriculum Activities</h1>
        </div>
        
        <div class='sectionContent'>
            <b>Magic Skills</b>
            <ul class='keySkills'>
                <li>$curriculum1</li>
                <li>$curriculum2</li>
                <li>$curriculum3</li>
              
            </ul>

        </div>
        <div class='clear'></div>
    </section>



    <section>
    <div class='sectionTitle'>
        <h1>Hobbies</h1>
    </div>
    
    <div class='sectionContent'>
        <b>Magic Skills</b>
        <ul class='keySkills'>
            <li>$hobby1</li>
            <li>$hobby2</li>
            <li>$hobby3</li>
          
        </ul>

    </div>
    <div class='clear'></div>
</section>



    
    <section>
        <div class='sectionTitle'>
            <h1>References</h1>
        </div>
            <article>
                <div class='container'>
                    <div class='box'>
                        <div class='vcard'>
                              <span class='fn'><b>Minerva McGonagall</b></span>
                              <div class='title'>Headmistress</div>
                              <div class='org'>Hogwarts School of Witchcraft and Wizardry</div>
                              <div>Relationship: Professor</div>
                                  <a class='email' href='mailto:mcgonagall@hogwarts.edu'>mcgonagall@hogwarts.edu</a>
                              <div class='tel'>(000) 000-0000</div>
                              <div class='adr'>
                            <div class='street-addres'>Hogwarts Castle</div>
                                   <span class='locality'>Highlands</span>, 
                                <span class='region'>Scotland</span>, 
                                <span class='postal-code'>00000</span>
                                <span class='country-name'>Great Brittain</span>
                             </div>
                        </div>
                    </div>

                     
                </div>
                </div>
            </article>
        <div class='clear'></div>
    </section>
    
    <section>
        <p>
            
        </p>
    </section>
    
    </body>";
    

?>



<!-- Responsive HTML/CSS CV template -->
<!-- Originally by Thomas Hardy; adapted by William Chase and Leslie Myint -->

<!DOCTYPE html>
<html>
<head>
<title>Hermione Granger - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Hermione Granger."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="../css/cv.css">
<link href='https://fonts.googleapis.com/css?family=Rokkitt:regular,bold|Lato:regular,black' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>

	.client-name{
margin-left:1350px;
font-size:20px;
font-weight:bold;
color:black;

	}
    
html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video {
	border:0;
	font:inherit;
	font-size:100%;
	margin:0;
	padding:0;
	vertical-align:baseline;
}

article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
	display:block;
}

html, body {
	/* background: #181818; */
	font-family: 'Lato', helvetica, arial, sans-serif;
	font-size: 16px;
	color: #222;
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

body em {
	font-weight: bold;
	text-decoration: underline;
}

body b {
	font-weight: bold;
}

body i {
	font-style: italic;
}

.clear {
	clear: both;
}

p {
	font-size: 1em;
	line-height: 1.4em;
	margin-bottom: 20px;
	color: #444;
}

#cv {
	width: 90%;
	max-width: 800px;
	background: #f3f3f3;
	margin: 30px auto;
	margin-top: 0px;
	margin-bottom: 0px;
}

.mainDetails {
	padding: 25px 25px;
	border-bottom: 2px solid #cf8a05;
	background: #ededed;
}

#name h1 {
	font-size: 3em;
	font-weight: 700;
	font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
	margin-bottom: -6px;
}

#name h2 {
	font-size: 2em;
	margin-left: 2px;
	font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
}

#mainArea {
	padding: 0px 25px;
}

#name {
	float: left;
}

#contactDetails {
	float: right;
}

#contactDetails ul {
	list-style-type: none;
	margin-top: 2px;
}

#contactDetails ul li {
	margin-bottom: 3px;
	color: #444;
  	font-size: 15px;
}

#icon {
  font-size: 15px;
  color: #444;
}

#contactDetails ul li a, a[href^=tel] {
	color: #444; 
	text-decoration: none;
	-webkit-transition: all .3s ease-in;
	-moz-transition: all .3s ease-in;
	-o-transition: all .3s ease-in;
	-ms-transition: all .3s ease-in;
	transition: all .3s ease-in;
}

#contactDetails ul li a:hover { 
	color: #cf8a05;
}

section {
	border-top: 1px solid #dedede;
	padding: 20px 0 0;
	overflow: hidden;	
	word-wrap: break-word;	
}

section:first-child {
	border-top: 0;
}

section:last-child {
	padding: 20px 0 10px;
}

.sectionTitle {
	float: left;
	width: 25%;
}

.sectionContent {
	float: right;
	width: 72.5%;
	padding-top: 10px;
}

.sectionTitle h1 {
	font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
	font-style: italic;
	font-size: 1.8em;
	color: #cf8a05;
}

.sectionContent h2 {
	font-weight: bold;
	margin-bottom: 1px;
}

.contentHeader {
	font-weight: bold;
}

.contentDate {
	float: right;
}

.sectionContent ol, ul {
	margin-left: 35px;
}

.subDetails {
	font-size: 0.95em;
	/*font-style: italic;*/
	margin-bottom: 2px;
}

.executiveSummary {
  	list-style-type: disc;
	margin-bottom: 10px;
	font-size: 1em;
	color: #444;
	list-style-position: inside;
	text-indent: -1.5em;
	padding-left: 1em;
 	margin-left: 10px;
}

.executiveSummary li {
  	margin:0 0 6px 0;
}

.publications {
  	float: right;
  	width: 72.5%;
  	padding-top: 10px;
}

.publications li {
  	margin:0 0 6px 0;
}

.publications ul, ol {
  	margin-left: 15px;
}

.keySkills {
	list-style-type: disc;
	-webkit-column-count: 2;
	-moz-column-count: 2;
	column-count: 2;
	-webkit-column-gap: 50px;
	column-gap: 50px;
	-moz-column-gap: 50px;
	margin-bottom: 20px;
	font-size: 1em;
	color: #444;
	list-style-position: inside;
	text-indent: -1.5em;
	padding-left: 1em;

}

.keySkills ul li {
	margin-bottom: 3px;
}


/*--------------FLEX GRID-------------*/

.container {
	width: 72.5%;
	float: right;
	padding-top: 10px;
	height: auto;
	display: flex;
	flex-direction: row;
	justify-content: left;
	flex-flow: wrap;
}

.box {
	width: 48%;
	height: 55%;
	margin-right: 10px;
  	margin-bottom: 10px;
	box-sizing: border-box;
}


/*--------------RESPONSIVE ELEMENTS-------------*/
@media all and (min-width: 602px) and (max-width: 800px) {
	.keySkills {
	-moz-column-count:1;
	-webkit-column-count:1;
	column-count:1;
	}

  .box {
		width: 90%;
	}

}

@media all and (max-width: 601px) {
	#cv {
		width: 95%;
		margin: 10px auto;
		min-width: 280px;
	}
	
  .box {
		width: 90%;
	}
  
	#name, #contactDetails {
		float: none;
		width: 100%;
		text-align: left;
	}
	
	.sectionTitle {
		margin-left: -2px;
		font-size: 1.25em;
	}
	
	.sectionTitle, .sectionContent, .publications, .container {
		float: none;
		width: 100%;
	}

	.keySkills {
		-moz-column-count:1;
		-webkit-column-count:1;
		column-count:1;
	}

}

@media all and (max-width: 480px) {
	.mainDetails {
		padding: 15px 15px;
	}
	
	section {
		padding: 15px 0 0;
	}
	
	#mainArea {
		padding: 0 25px;
	}

  .box {
		width: 90%;
	}
  
	.keySkills {
	-moz-column-count:1;
	-webkit-column-count:1;
	column-count:1;
	}
	
	#name h1 {
		line-height: .8em;
		margin-bottom: 4px;
	}
}

@media print {
	#cv {
		width: 100%;
	}
}

@-webkit-keyframes reset {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 0;
	}
}

@-webkit-keyframes fade-in {
	0% {
		opacity: 0;
	}
	40% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}

@-moz-keyframes reset {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 0;
	}
}

@-moz-keyframes fade-in {
	0% {
		opacity: 0;
	}
	40% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}

@keyframes reset {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 0;
	}
}

@keyframes fade-in {
	0% {
		opacity: 0;
	}
	40% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}

.instaFade {
	-webkit-animation-name: reset, fade-in;
	-webkit-animation-duration: 1.5s;
	-webkit-animation-timing-function: ease-in;
	
	-moz-animation-name: reset, fade-in;
	-moz-animation-duration: 1.5s;
	-moz-animation-timing-function: ease-in;
	
	animation-name: reset, fade-in;
	animation-duration: 1.5s;
	animation-timing-function: ease-in;
}

.quickFade {
	-webkit-animation-name: reset, fade-in;
	-webkit-animation-duration: 2.5s;
	-webkit-animation-timing-function: ease-in;
	
	-moz-animation-name: reset, fade-in;
	-moz-animation-duration: 2.5s;
	-moz-animation-timing-function: ease-in;
	
	animation-name: reset, fade-in;
	animation-duration: 2.5s;
	animation-timing-function: ease-in;
}
 
.delayOne {
	-webkit-animation-delay: 0, .5s;
	-moz-animation-delay: 0, .5s;
	animation-delay: 0, .5s;
}

.delayTwo {
	-webkit-animation-delay: 0, 1s;
	-moz-animation-delay: 0, 1s;
	animation-delay: 0, 1s;
}

.delayThree {
	-webkit-animation-delay: 0, 1.5s;
	-moz-animation-delay: 0, 1.5s;
	animation-delay: 0, 1.5s;
}

.delayFour {
	-webkit-animation-delay: 0, 2s;
	-moz-animation-delay: 0, 2s;
	animation-delay: 0, 2s;
}

.delayFive {
	-webkit-animation-delay: 0, 2.5s;
	-moz-animation-delay: 0, 2.5s;
	animation-delay: 0, 2.5s;
}
.mainDetails{
	margin-top:25px;
}
</style>
</head>

<body id="top">

</body>
</html>


