<?php 
    session_start();
    include('../includes/connection.php');   
    if(isset($_POST['adminlogin'])){
        $query = "select name,email,password from admins where email = '$_POST[email]' AND password = '$_POST[password]'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)){
            $_SESSION['email'] = $_POST['email'];
            while($row = mysqli_fetch_assoc($query_run)){
                $_SESSION['name'] = $row['name'];
            }
            echo "<script type='text/javascript'>
              window.location.href = 'admin_dashboard.php';
            </script>";
        }
        else{
          echo "<script type='text/javascript'>
              alert('Please enter correct email and password.');
              window.location.href = 'admin_login.php';
          </script>";
        }
    }
?>
<html>
<head>
    <title>Admin Login</title>
    <!-- jQuery file -->
    <script src="../includes/juqery_latest.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .login_home_page {
        background-color: white;
    border-radius: 10%;
    top: 25vh;
    padding: 25px 50px; /* Consolidated padding shorthand */
    height: 44vh;
    width: 25vw;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
.log {
    text-align: center; /* Center align the content */
    margin-top: 20px; /* Add some top margin for spacing */
}

.log input[type="submit"] {
    padding: 8px 15px; /* Padding for the button */
    border-radius: 5px; /* Rounded corners */
    border: none; /* No border */
    background-color: #414a4c; /* Yellow background color */
    color: white; /* Text color */
    cursor: pointer; /* Show pointer cursor on hover */
    font-size: 16px; /* Font size */
}
.log input[type="submit"]:hover {
    background-color:gray; /* Darker yellow on hover */
}
.cent {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.arr{
    padding: 9px;
}
    </style>
</head>
<body>
    <div class="cent">
        <div class="login_home_page">
            <center><h3 style="padding: 5px;width: 15vw;"><center>Admin login</center></h3></center>
            <form action="" method="post">
                <div class="arr">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                </div>
                <div class="arr">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                </div>
                <div class="log">
                    <center><input type="submit" class="btn btn-warning" name="adminlogin" value="Login"></center>
                </div>
            </form>
            <center><a href="../index.php">Go to Home</a></center>
        </div>
    </div>
</body>
</html>