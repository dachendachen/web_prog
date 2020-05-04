<?php
    session_start();
    ?>

<html>
<head>
<title>Confirmation Page - email</title>
<style>
body{
    text-align: center;
}
</style>
</head>

<body>
<?php
    echo"<h1>Popeye Magazine Online Store Confirmation Page</h1>";
    $firstname = $_SESSION["firstname"];
    $email = $_SESSION["email"]."@nyu.edu";
    echo "<h2>Thank you, $firstname, for supporting Popeye Magazine!</h2>";
    echo "<h2>Your Order has been successfully created!</h2>";
    echo "<h3>There is an email has been sent to $email !</h3>";
    
$subject = "Popeye Magazine Online Store Order Confirmation.";
$message = "Hello, $fristname !\n Thank you for your order!! \n We'll send another email once we shipped your order!";
mail($email, $subject, $message);

 ?>
</body>


</html>
