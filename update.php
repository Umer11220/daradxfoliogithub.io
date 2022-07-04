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

    <title>Responsive Regisration Form </title>
</head>

<body>
    <div class="container">
        <header>Registration</header>

        <form action="" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" value="name" placeholder="Enter your name" required>
                        </div>

                        
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" value="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" value="phone" name="phone" placeholder="Enter mobile number" required>
                        </div>

                       

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" value="dob" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" value="occupation" name="occupation" placeholder="Enter your ccupation" required>
                        </div>
                    </div>
                </div>

                
                   

                    <div class="fields">
                        <div class="input-field">
                            <label>password</label>
                            <input type="password" value="password" name="password" placeholder="Set your password" required>
                        </div>


                        <div class="input-field">
                            <label>joining Date</label>
                            <input type="date" value="join_date" name="join_date" placeholder="Enter your joining date" required>
                        </div>

                       
                    </div>

                    <input type="submit" value="update" name="update">
                </div>
            </div>
   
            <?php

if(isset($_POST['update']))
{
    $na=$_POST['name'];
    $em=$_POST['email'];
    $ph=$_POST['phone'];
    $dob=$_POST['dob'];
    $occup=$_POST['occupation'];
    $pass=$_POST['password'];
    $jdate=$_POST['join_date'];


    $insertq="UPDATE `register` SET `name`='$na',`email`='$em',`phone`='$ph',`dob`='$dob',`occupation`='$occup',`password`='$pass',`join_date`='$jdate' WHERE `id`='$id'";
    $insertcon=mysqli_query($conn,$insertq);
    if($insertcon)
    {
        $_SESSION['status']="<script>alert('Update Successfull..!');</script>";
        header("Location: employe.php");
    }
    else{
        echo "Error";
    }




}

?>



    
    </div>
    </form>
    </div>

    <script src="scriptsignup.js"></script>
</body>

</html>