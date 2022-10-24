<?php

require("connection/connection.php");
$con = connection();

if(!isset($_SESSION)){
    session_start();
}
    $email = "";
    $name = "";
    $errors = array();

    if(isset($_POST['signup'])){

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM member_list WHERE email = '$email' AND username = '$username'";
    $res = mysqli_query($con, $email_check);
    $ares = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    } 
    if(mysqli_num_rows($ares) > 0){
      $errors['username'] = "Username is already exist!";
    }
    if(count($errors) === 0){
    $sql = "INSERT INTO `member_list`( `username`, `password` , `email`,`access`) VALUES ('$username','$password','$email','member')";
    $con->query($sql) or die ($con->error);
    
    echo header("location: login.php");
     }
    }
   
  if(isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);
    $sql = "SELECT * from member_list WHERE email = '$email' AND password = '$password'" ;
    $user = $con->query($sql) or die ($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;
    $_SESSION['email'] = $email;

    if($total > 0){
        $_SESSION['UserLogin'] = $row['email'];
        $_SESSION['Access'] = $row['access'];
        echo header("Location: index.php");
    }else{ 
      $errors['email'] = "Incorrect email or password!";
    }
}

  if(isset($_POST['report'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $unit = mysqli_real_escape_string($con, $_POST['unit']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $receiver = "laptopsquare19@gmail.com";
    $subject = "Complain Report";
    $body = "Username: $username\nEmail: $email\nLaptop Unit: $unit\n\nComplain Report Message: $message";
    $sender = "From: $email";
    if(mail($receiver, $subject, $body, $sender)){
     $info = "Email Sent Successfully!";
    }else{
    $info = "Sorry, failed while sending mail!";
    }
    $_SESSION['info'] = $info;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['unit'] = $unit;
    $_SESSION['message'] = $message;

}
    
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM member_list WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE member_list SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: LaptopSquare";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

  
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM member_list WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email'];
            $update_pass = "UPDATE member_list SET code = $code, password = '$password' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   
    if(isset($_POST['login-now'])){
        header('Location: login.php');
    }

?>