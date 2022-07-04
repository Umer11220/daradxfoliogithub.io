<?php
include ('connection.php')

?>


<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">



    <title> AdminDashboard</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">CodingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Employe data</span>
                    </a></li>
                <li><a href="employe.php">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Employes</span>
                    </a></li>
                <li><a href="order,php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Total order</span>
                    </a></li>
                <li><a href="project">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="link-name">Projects</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Comment</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-share"></i>
                        <span class="link-name">Share</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="logout.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <!-- body -->            
                <table style="border:1px solid" class="table">
<tr>            
            <th class="seth"> ID</th>
            <th scope="col"> NAME</th>
            <th scope="col"> Email</th>
            <th scope="col"> Phone </th>
            <th scope="col"> DOB</th>
            <th scope="col"> Occupation </th>
            <th scope="col"> Joining date </th>
            <th scope="col"> Update </th>
            <th scope="col"> Delete </th>
            </tr>

            <?php

$query="SELECT * FROM `register`";
$con=mysqli_query($conn,$query);
if($con)
{
    while($data=mysqli_fetch_assoc($con))
    {
        
        $id=$data['id'];
        $na=$data['name'];
        $em=$data['email'];
        $phone=$data['phone'];
        $dob=$data['dob'];
        $occup=$data['occupation'];
        // $pass=$data['password'];
        $jdate=$data['join_date'];
       

?>
        

<tr>
     <td class="seth"><?php echo $id; ?></td>   
    <td class="seth"><?php echo $na; ?></td>
    <td class="seth"><?php echo $em; ?></td>
    <td class="seth"><?php echo $phone; ?></td>
    <td class="seth"><?php echo $dob; ?></td>
    <td class="seth"><?php echo $occup; ?></td>
    <!-- <td class="seth"><?php echo $pass; ?></td> -->
    <td class="seth"><?php echo $jdate; ?></td>
    
    <td>
      <a href="update.php?$id=<?php echo $id; ?> "><button class="btn btn-primary">Update</button></a>
  </td>
  <td>
  <a href="empdatadel.php?$id=<?php echo $id; ?> "><button class="btn btn-primary">Delete</button></a>
  </td>

</tr>

<?php

    }
}

?>


                
        
        
        </table>
    


                
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <script src="script.js"></script>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>