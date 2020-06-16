<?php
// error variable.
$error = array();

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "Please Enter Your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Please Enter Your Password";
}


if(empty($error)){

    $query = "SELECT hostID, firstname, lastname, companyname, email, password, profileImage FROM host_register WHERE email=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);


    mysqli_stmt_bind_param($q, 's', $email);

    //execute query
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(!empty($row)) {
        //verify password
        if(password_verify($password, $row['password'])) {
            header("location: ../host_profile/host_page.php");
            exit();
        }
    }else{
         $message = "You are not a host. Please Register";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }
    
    }else{
         $message = "Please type in the email/password in order to login";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }


















