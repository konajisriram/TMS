<?php 
    session_start();
    if(isset($_SESSION['email'])){
    include('includes/connection.php');
    if(isset($_POST['update'])){
        $query = "update tasks set status = '$_POST[status]' where tid = $_GET[id]";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
          echo "<script type='text/javascript'>
              alert('Status updated successfully...');
            window.location.href = 'user_dashboard.php';  
          </script>";
        }
        else{
          echo "<script type='text/javascript'>
              alert('Error...Plz try again.');
              window.location.href = 'user_dashboard.php';
          </script>";
        }
    }
?>
<html>
<head>
    <title>ETMS</title>
    <!-- jQuery file -->
    <script src="includes/juqery_latest.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <style>
.cent {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.homepage{
    background-color: white;
    top: 25vh;
    border-radius: 6%;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 25px;
    height: 30vh;
    width: 30vw;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
.kkl {
    display: inline-block; /* Ensure elements are displayed inline */
    padding: 10px 20px; /* Padding for the elements */
    border-radius: 5px; /* Rounded corners */
    border: none; /* No border */
    background-color: #ffc107; /* Yellow background color */
    color: white; /* Text color */
    cursor: pointer; /* Show pointer cursor on hover */
    text-decoration: none; /* Remove underline for links */
    font-size: 16px; /* Font size */
    margin-right: 10px; /* Right margin for spacing between elements */
}

.kkl:hover {
    background-color: #ff9800; /* Darker yellow on hover */
}


    </style>
</head>
<body>
    <div class="cent">
        <div class="homepage">
            <center>
                <h3>Update task status</h3>
                <?php 
                    $query = "select * from tasks where tid = $_GET[id]";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="status">
                                <option>-Select-</option>
                                <option>Complete</option>
                                <option>In-Progress</option>
                            </select>
                            </div>
                            <button type="submit" class="kkl" name="update">Update</button>
                            <a href="user_dashboard.php" class="kkl">Dashboard</a>
                        </form>
                        <?php
                    }
                 ?>
            </center>
        </div>
    </div>
</body>
</html> 
<?php  
}
else{
    header('Location:user_login.php');
}
?>