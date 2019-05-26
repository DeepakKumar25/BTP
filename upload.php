<?php
$allow = array("jpg", "jpeg", "png");

$todir = 'uploads/';

if ( !!$_FILES['file']['tmp_name'] ){
    $info = explode('.', strtolower( $_FILES['file']['name']) );
    if ( in_array( end($info), $allow) ){
        if ( move_uploaded_file( $_FILES['file']['tmp_name'], $todir.'photo.png' ) ){
            header('location:process.php');
        }
    }
    else{
        echo 'Not Allowd';
    }
}

?>