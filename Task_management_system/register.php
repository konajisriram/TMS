<?php    
    include('includes/connection.php');
    if(isset($_POST['userRegistration'])){
        $query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
          $query_run = mysqli_query($connection,$query);
        if($query_run){
          echo "<script type='text/javascript'>
              alert('User registered successfully....');
            window.location.href = 'index.php';  
          </script>";
        }
        else{
          echo "<script type='text/javascript'>
              alert('Error...Plz try again.');
              window.location.href = 'index.php';
          </script>";
        }
    }
?>
<html>
<head>
    <title>User Login</title>
    <!-- jQuery file -->
    <script src="includes/juqery_latest.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    .custom-heading {
            color: black;
        }
    .login_home_page {
        background-color: white;
    border-radius: 10%;
    top: 25vh;
    padding: 25px 50px; /* Consolidated padding shorthand */
    height: 60vh;
    width: 25vw;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
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
.resg {
    text-align: center; /* Center align the content */
    margin-top: 20px; /* Add some top margin for spacing */
}

.resg input[type="submit"] {
    padding: 8px 15px; /* Padding for the button */
    border-radius: 5px; /* Rounded corners */
    border: none; /* No border */
    background-color: #414a4c; /* Yellow background color */
    color: white; /* Text color */
    cursor: pointer; /* Show pointer cursor on hover */
    font-size: 16px; /* Font size */
}

.resg input[type="submit"]:hover {
    background-color:gray; /* Darker yellow on hover */
}

    </style>
</head>
<body>
    <div class="cent">
        <div class="login_home_page" >
        <h3 class="custom-heading"><center>User Registration</center></h3>
            <form action="" method="post">
                <div class="arr">
                    <input type="text" class="form-control" name="name" placeholder="Enter Username" required>
                </div>
                <div class="arr">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                </div>
                <div class="arr">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                </div>
                <div class="arr">
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile No." required>
                </div>
                <div class="resg">
                    <center><input type="submit" name="userRegistration" value="Register"></center>
                </div>
            </form>
            <center><a href="index.php">Go to Home</a></center>
        </div>
    </div>
</body>
</html>