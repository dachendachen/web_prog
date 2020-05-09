<?php
session_start();
?>

<html>
<head>
<title>Customer Info Page</title>
<style>
body{
    text-align:center;
}
form{
display: inline-block;
}
</style>
</head>

<body>
<h1>Welcome to Popeye Magazine Online Store</h1>
<h4>Web HW 9 Chen<h4>

<h2>Please Login</h2>
<br/>

<form action="info.php" method="post">

<h3>First Name:</h3> <input type=text name="firstname">
<br/>
<h3>Last Name:<h3> <input type=text name="lastname">
<br/>

<h3>NYU Email Address:</h3> <input type=text name="email">@nyu.edu
<br/>
<br/>
<input type=submit value="Continue to Order Page" name="submit">
<input type=reset value="Cancel">

<?php
    if(isset($_POST["submit"])){
        if(!isset($_POST["firstname"])){
            echo '<script type="text/javascript">';
            echo 'alert("please enter your firstname")';
            echo '</script>';
        }
        if(!isset($_POST["lastname"])){
            echo '<script type="text/javascript">';
            echo 'alert("please enter your lastname")';
            echo '</script>';
        }
        if(!isset($_POST["email"])){
            echo '<script type="text/javascript">';
            echo 'alert("please enter your email");';
            echo '</script>';
        }
        else{
            $_SESSION["firstname"]=$_POST["firstname"];
            $_SESSION["lastname"]=$_POST["lastname"];
            $_SESSION["email"] = $_POST["email"];
            echo "<script>window.open('shop.php');</script>";
        }
    }
    ?>


</form>





</body>
</html>
