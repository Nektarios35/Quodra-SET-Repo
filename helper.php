<?php

function validate_input_text($textValue){
    if (!empty($textValue)){
        $trim_text = trim($textValue);
        // remove illegal character
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return '';
}

function validate_input_email($emailValue){
    if (!empty($emailValue)){
        $trim_text = trim($emailValue);
        // remove illegal character
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    return '';
}


//uplod images
function upload_image($path, $filen) {
    $dir = $path;
    $default = "default.png";

    // get Filename
    $filename = basename($filen['name']);
    $targetFilePath = $dir . $filename;
    $filetype = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if(!empty($filename)) {
        //allowed file formats

        $allowedFormats = array("jpg", "png", "jpeg", "gif", "pdf");

        if(in_array($filetype, $allowedFormats)) {
            if(move_uploaded_file($filen['tmp_name'], $targetFilePath)) {
                return $targetFilePath;
            }
        }
    }

    //return the default image
    return $path . $default;
}

// function home_host_info($con, $hostID){
//     $query = "SELECT companyname FROM host_register WHERE hostID=?";
//     $q = mysqli_stmt_init($con);

//     mysqli_stmt_prepare($q, $query);

//     // bind the parameter
//     mysqli_stmt_bind_param($q, 'i', $hostID);

//     mysqli_stmt_execute($q);
//     $result = mysqli_stmt_get_result($q);

//     $row = mysqli_fetch_array($result);
//     return empty($row) ? false:$row;
// }













