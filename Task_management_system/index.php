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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
       /* Center the content */
       .centered {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.link-container {
    text-align: center;
    background-color: white; /* Semi-transparent black background */
    padding: 40px; /* Add padding for spacing */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Add a shadow effect */
}

.sidebyside {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 40px; /* Add space below the links */
}

.sidebyside a {
    margin: 0 10px; /* Add horizontal spacing between links */
    text-decoration: none;
    color: black; /* Text color */
    padding: 10px 20px;
    border-radius: 5px; /* Rounded corners for links */
    background-color: #f0f0f0; /* Blue background color */
    transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transitions */
}

.sidebyside a:hover {
    background-color: lightgray;/* Darker blue on hover */
}

.reglink a {
    color: #333; /* Text color */
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px; /* Rounded corners for link */
    background-color: #f0f0f0; /* White background color */
    transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transitions */
}

.reglink a:hover {
    background-color: white; /* Light gray on hover */
}







</style>
</head>
<body>
    <div class="centered">
        <div class="link-container">
            <form>
            <div class="sidebyside">
                <a href="user_login.php">User Login</a>
                <a href="admin/admin_login.php">Admin Login</a>
            </div>
            </form>
                <center><a href="register.php"> New user ? User Registration</a></center>
        </div>
    </div>
</body>

</html>