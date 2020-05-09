<?php
    session_start();
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
    text-align:center;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
<h1>Welcome to Popeye Magazine Online Store</h1>
<p style="color: blue;"> Web HW9 Chen </p>

<?php
    $name = $_SESSION["firstname"];
    echo"<h2 style=\"color: purple\">$name, please make your selections!</h2>";
    ?>

<?php
    echo"<form action=\"shop.php\" method=\"POST\">";
    $issues=array("2019 November Issue871","2014 JULY Issue807","2014 APRIL Issue804","2020 Feb Issue874","2017 APRIL Issue840","2015 Feb Issue814","2019 APRIL Issue864 ","2019 MAY Issue865");
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
            $image_path = "out_of_stock.php";
            $price = "0.0";
        }
        else{
            $image_path = "source/".$image.".jpg";
        }
        
        echo "<img src=$image_path>";
        echo '<h4>Popeye Magazine:'.$issues[$i].'</h4>';
        echo '<p>'.$dis[$i].'</p>';
        echo "<p>Price: $ $price </p>";

        if($stock!=0)
            echo '<input id='.$image.' type="button" value="Order" name='.$image.'>';
        
        echo '<br/>';
        echo '<br/>';
    }
    
    echo'<input type="submit" value="CONFIRM" name="submit">';
    echo '</form>';
?>



<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["popeye1"])){
            $_POST["popeye1"]=1;
        }
        if(isset($_POST["popeye2"])){
             $_POST["popeye2"]=1;
        }
        if(isset($_POST["popeye3"])){
            $_POST["popeye3"]=1;
        }
        if(isset($_POST["popeye4"])){
           $_POST["popeye4"]=1;
        }
        if(isset($_POST["popeye5"])){
           $_POST["popeye5"]=1;
        }
       if(isset($_POST["popeye6"])){
        $_POST["popeye6"]=1;
        }
        if(isset($_POST["popeye7"])){
         $_POST["popeye7"]=1;
        }
        if(isset($_POST["popeye8"])){
       $_POST["popeye8"]=1;
        }
       else{
            echo '<script>';
            echo 'alert("you have to make a choice!")';
            echo '</script>';
                  }
    }

    ?>


<script>
const arr={1:"#popeye1",2:"#popeye2",3:"#popeye3",4:"#popeye4",5:"#popeye5",6:"#popeye6",7:"#popeye7",8:"#popeye8"};
$.each(arr, function(key,value){
    $(value).click(function(){
    if(this.value==="Order"){
    this.value = 'In Cart';
    $(this).css("background-color","yellow");
                   ?>
    }
    else{
    this.value = 'ORDER';
    $(this).css("background-color","white");
    }
            });
                        });
</script>

</body>

</html>

