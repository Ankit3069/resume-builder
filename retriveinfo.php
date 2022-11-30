
<?php





+





$conn=mysqli_connect("localhost","root","","resumebuilder");
    $cmd="select resume.*,resume1.* from resume1 
    join resume on resume1.r_id=resume.id";


$sql_obj=mysqli_query($conn,$cmd);
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-10'>";




    while($row=mysqli_fetch_assoc($sql_obj))
    {
            
      $name=$row['name'];
    
      $language=$row['language'] ; 
      $database=$row['database']  ; 

      $address=$row['address'];
     

        echo "
        
        <div class='card'>
       
    
        <div class='head'>
        <h3 >$name</h3>

        </div>
        <div class='head'>
        <p>Just Rs $database</p>

        </div>
        <div class='price'>
        <p>Rs $address</p>
        </div>
        <hr></hr>

     
        

        </div>";
    
            
    }
    

    echo "</div>";


    




    echo "</div>";
    echo "</div>";

  
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  
</body>
</html>