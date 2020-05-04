<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>
<head>
<title>WEB hw8 Store</title>
<style>
img{
width: 250px;
height: 250px
}
body{
    text-align:center;

}
</style>
</head>
<body>

<h1>Welcome to Popeye Magazine Online Store</h1>
<p style="color: blue;"> Web HW9 Chen </p>

<h2>Our Available Magazines</h2>

<?php
    echo"<form action=\"shop.php\" method=\"post\">";
    $issues=array("2019 November Issue871","2014 JUlY Issue807","2014 APRIL Issue804","2020 Feb Issue874","2017 APRIL Issue840","2015 Feb Issue814","2019 APRIL Issue864 ","2019 MAY Issue865");
    $dis= array("What music you want to listen now?","The Portland City Guide ","City Boys ABC","Style Sample 2020","Spring fashions ","Style Sample 2015","Taiwan City Guide","Tokyo, My Street");
    
    $f = 'data.txt';
    $all_data = file_get_contents($f);
    $lines = explode("\n", $all_data);
    for($i= 0; $i<8;$i++){
        $line = explode(" ",$lines[$i]);
        $image = trim($line[0]);
        $stock = trim($line[1]);
        $price = trim($line[2]);

        if($stock == 0){
            $image = "source/outofstock.jpg";
            $price = "0.0";
        }
        else{
            $image = "source/".$image.".jpg";
        }
        
        echo "<img src=$image>";
        echo "<h4>Popeye Magazine:".$issues[$i]."</h4>";
        echo "<p>".$dis[$i]."</p>";
        echo "<p>Price: $ $price </p>";
        //echo "..." for the order button
        echo "<br/>";
        echo "<br/>";
    }
    
    echo"<input type=submit value=\"CONFIRM\" name=\"submit\">";
    echo "</form>"
    
    /*
     if no order, pop an alert
    if(isset($_POST["submit"])){
        
    }
     echo "<script>window.open('confirm.php');</script>";
    */
    ?>


</body>

</html>

