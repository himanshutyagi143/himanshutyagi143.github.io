<?php
require_once 'config/function.php';
if($key == '1')
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Header Section-->
    <div class="header">
        <div class="head">
            <div class="head-left fl">
                <a href="./">My Blog</a>
            </div>
            <div class="head-right fr"></div>
            <div class="clr"></div>
        </div>
    </div>
    <!--Header Section-->
    <!--nav Section-->
    <div class="nav1">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">learn html</a></li>
            <li><a href="">learn css</a></li>
            <li><a href="">learn javascript</a></li>
            <li><a href="">learn php</a></li>
            <li><a href="">About Us</a></li>
        </ul>
    </div>
    <!--nav Section-->
    <!--mid Section-->
    <div class="mid">
        <div class="mid-left fl">
            <div class="post">
            <h1></h1>
            <img src=".." alt="post-title">
            <p></p>
            <a href="#" target="_blank">Blog catagery</a>
            </div>
        </div>
        <div class="mid-right fr"></div>
        <div class="clr"></div>
    </div>
    <!--mid Section-->
    <!--footer Section-->
    <div class="footer">
        <h4>Copyright &copy; 2020-2021</h4>
    </div>
    <!--footer Section-->
</body>
</html>
<?php
}
else
{
    echo "Page not Found";
}