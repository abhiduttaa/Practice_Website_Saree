
<?php
$showerror=false;
$showlogin=false;
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Include the database connection
INCLUDE 'connect.php';

// Collect the form data
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from `user` WHERE username='$username' AND password='$password' ";
$result = mysqli_query($con, $sql);
$num=mysqli_num_rows($result);


if($num==1){
$showlogin=true;
session_start();
$_SESSION['loggedin']=true;
$_SESSION['username']=$username;
$_SESSION['password']=$password;
header("location: userhome.php");

}
else{
$showerror=true;
}

if($showlogin==true){
echo '<div class="alert alert-success alert-dismissible" role="alert">
<strong>Success!</strong> You are successfully LOGGED IN ! And we are happy to inform that your account is LOGGED IN!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>';
}
if($showerror==true){
// echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
echo '<div class="alert alert-warning alert-dismissible" role="alert">
<strong>Error!</strong> INVALID CREDENTIALS ! We regret to inform account NOT LOGGED IN!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      width: 300px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .login-container input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login-container input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
