<?php
session_start();
include('database.php');
include('function.php');
$msg="";

if (isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * FROM person WHERE email = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);
      if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['IS_LOGIN']='yes';
        redirect('logged.php');
      }else{
        $msg="please enetr valid login details";
        
      }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>

</head>

<body style= background-color:aliceblue>
<div class="img">
    <img src="image/logo.png" alt="logo">

</div>

<div class="container">
    <form action="login.php" method="POST" >
     <label for ="email">Email</label><br><br>
     <input type="email" id="email" name ="email" size = "38" style="height:30px"  placeholder="Enter your email" required><br><br>
     <label for="password">Password</label><br><br>
     <input type="password" id="password" name="password"size = "38" style="height:30px" placeholder="Enter your password" required><br><br>
     
</div>
<div class="body">
     <p><a href="file:///C:/Users/Dell/Desktop/loginscreen/pass.html"><strong>Forgot password?</strong></a></p>
    <p>Don't have an account?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="file:///C:/Users/Dell/Desktop/loginscreen/account.html"> <strong>Create an
     account</strong></a></p> 
     <input type="submit" class="button" name="login" value="Login">
     <div class="login_msg"><?php echo $msg?></div> 
</div>

</form>

</body>
</html>


