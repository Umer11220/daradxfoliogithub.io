<?php
include ('connection.php');
?>


<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="stylesignup.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Construction order </title>
</head>

<body>
    <div class="container">
        <header><h1>place order</h1></header>

        <form action="" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Project Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>project name</label>
                            <input type="text" name="pname" placeholder="Enter your name" >
                        </div>

                        
                        <div class="input-field">
                            <label>Project type</label>
                            <input type="text"  name="ptype" placeholder="Enter your email" >
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text"  name="phone" placeholder="Enter mobile number" >
                        </div>

                        <div class="input-field">
                            <label>Start date</label>
                            <input type="date" name="sdate" placeholder="Enter birth date" >
                        </div>

                        
                        <div class="input-field">
                            <label>Area</label>
                            <input type="text"  name="area" placeholder="Enter your email" >
                        </div>

                       <div class="input-field">
                            <label>apreximate end time</label>
                            <input type="date"  name="edate" placeholder="Enter your ccupation" >
                        </div>

                        
                    </div>
                </div>
                    <br>
                    <input type="submit" value="submit" name="submit">
                </div>
            </div>
   


            <?php

if(isset($_POST['submit']))
{
    $pn=$_POST['pname'];
    $pt=$_POST['ptype'];
    $ph=$_POST['phone'];
    $sd=$_POST['sdate'];
    $Parea=$_POST['area'];
    $edate=$_POST['edate'];
    
    $query="INSERT INTO `projectorder`(`pname`, `ptype`, `phone`, `sdate`, `area`, `edate`) VALUES ('$pn','$pt','$ph','$sd','$Parea','$edate')";
    $result= mysqli_query($conn,$query);

    if($result)
    {
        echo "User is Registered";
    }
    else
    {
        echo "User is not Registered";
    }

}

?>

    
    </div>
    </form>
    </div>

    <script src="scriptsignup.js"></script>
</body>

</html>