<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // Include the database connection
  INCLUDE 'connect.php';
  
  // Collect the form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];

  // $sql = "SELECT * from `user` WHERE username='$username' AND password='$password' ";
  $sql1 = "INSERT INTO `user`(`email`, `username`, `password`) VALUES ('$email','$username','$password')";

  // $sql1 = "INSERT INTO `user`(`username`, `password`,`fullname`,`email`) VALUES ($username,$password,$fullname,$email)";
  $result= mysqli_query($con, $sql1);
  if(!$result){
    die("Unable to connect");
  }
  else{
    header("location: userhome.php");
  }
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e0f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .signup-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      width: 320px;
    }

    .signup-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .signup-container input[type="text"],
    .signup-container input[type="email"],
    .signup-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .signup-container input[type="submit"] {
      width: 100%;
      background-color: #00796b;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    .signup-container input[type="submit"]:hover {
      background-color: #004d40;
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <h2>Create Account</h2>
    <form action="signup.php" method="post">
      <input type="text" name="fullname" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Sign Up">
    </form>
  </div>
</body>
</html>
