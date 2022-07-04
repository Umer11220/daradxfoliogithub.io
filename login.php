<?php

include ('connection.php');
error_reporting(0);
?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="stylelogin.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="" method="POST">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" name="email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" name="password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                        <button type="submit" value="submit" name="submit"> SUBMIT</button>
                        </div>

                        <?php
    

            if(isset($_POST['submit']))
            $query=" SELECT * FROM login WHERE email='$_POST[email]'";
            
            $query_run = mysqli_query($conn,$query);
            
            while($row=mysqli_fetch_assoc($query_run))
            {
                if($row['email'] == $_POST['email'])
                {
                    if($row['password'] == $_POST['password'])
                    {
                        $_SESSION['email']=$row['email'];
                        $_SESSION['password']=$row['password'];

                        header("location: dashboard.php");
                        
                        echo "Login seccessfully";
                    }
                    else
                    {
                        echo "wrong password";
                    }
                    
                }
                else
                {   
                    echo "wrong email";

                }
               
            }
    ?>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="signup.php" class="link signup-link">Signup</a></span>
                    </div>
                </div>

                <div class="line">
                    <hr>
                </div>


            </div>

            <!-- Signup Form -->

        </section>

        <!-- JavaScript -->
        <script src="scriptlogin.js"></script>
    </body>
</html>