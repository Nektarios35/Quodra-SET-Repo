<?php

require ('../helper.php');
// error variable.
$error = array();

$firstname = validate_input_text($_POST['firstname']);
if (empty($firstname)){
    $error[] = "Please Enter Your First Name";
}

$lastname = validate_input_text($_POST['lastname']);
if (empty($lastname)){
    $error[] = "Please Enter Your Last Name";
}

$companyname = validate_input_text($_POST['companyname']);
if (empty($companyname)){
    $error[] = "Please Enter Your Company Name";
}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "Please Enter Your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Please Enter Your Password";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "Please Confirm Your Password";
}

$files = $_FILES['profileUpload'];
$profileImage = upload_image("../assets/img/images/", $files);

if(empty($error)){
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require ('../sqli_connect.php');

    // make a query
    $query = "INSERT INTO host_register(firstname, lastname, companyname, email, password, profileImage, 
                                   registerDate)";
    $query .= "VALUES(?, ?, ?, ?, ?, ?, NOW())";

    // initialize a statement
    $vals = mysqli_stmt_init($con);


    // prepare sql statement
    mysqli_stmt_prepare($vals, $query);

    // bind values
    mysqli_stmt_bind_param($vals, 'ssssss', $firstname, $lastname, $companyname, $email, $hashed_pass, $profileImage);

    // execute statement
    mysqli_stmt_execute($vals);

    if(mysqli_stmt_affected_rows($vals) == 1){

        //start a new session
        
        header('location: ../host_login/host_log.php');
        exit();
    }else{
        $message = "An Error Occured!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

}else{
    $message = "Not Valid!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

















