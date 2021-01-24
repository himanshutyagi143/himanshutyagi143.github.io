<?php
extract($_POST);
if(isset($_POST['admin_login']))
{
    if(empty($admin_email) && empty($admin_pass))
    {
        $msg = "Please Enter Email & Password";
    }
    else if(empty($admin_email))
    {
        $msg ="Please Enter Your Email";
    }
    else if(empty($admin_pass))
    {
        $msg ="Please Enter Your Password";
    }
    else
    {
        $msg ="";
    }
}
?>