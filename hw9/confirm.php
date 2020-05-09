<?php
    session_start();
    ?>

<html>

<head>
<title>Comfirmation Page</title>

<style>
img{
width: 250px;
height: 250px
}
body{
    text-align:center;
}
#confirm {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 10px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
<h1>Popeye Magazine Online Store</h1>
<h1>Order Confirmation</h1>

<?php
    $name = $_SESSION["firstname"];
    echo"<h2 style=\"color: purple\"> $name </h2>";
    echo "<h2>Thank you for your order!</h2>";
    echo "<h2>Here is your total. Please press Confirm to Check Out!</h2>";
?>

<table style="width: 80%">
<tr>
  <th>Magazine</th>
  <th>Issue</th>
  <th>Price</th>
</tr>
<?php
    $issues=array("2019 November Issue871","2014 JULY Issue807","2014 APRIL Issue804","2020 Feb Issue874","2017 APRIL Issue840","2015 Feb Issue814","2019 APRIL Issue864 ","2019 MAY Issue865");
    $dis= array("What music you want to listen now?","The Portland City Guide ","City Boys ABC","Style Sample 2020","Spring fashions ","Style Sample 2015","Taiwan City Guide","Tokyo, My Street");
    $f = 'data.txt';
    $all_data = file_get_contents($f);
    $lines = explode("\n", $all_data);
    $total = 0;
    for($i=0;$i<8;$i++){
        $line = explode(" ",$lines[$i]);
        $id = trim($line[0]);
        $stock = trim($line[1]);
        $price = trim($line[2]);
        if(isset($_POST[$id])){
          $image = "source/".$id.".jpg";
            echo '<tr>';
            echo '<td> <img src=$image> </td>';
            echo '<td>'.$issues[$i].'</td>';
            echo '<td> $'.$price.'</td>';
            echo '</tr>';
            $total += $price;
        }
        $tax = 0.08875 * $total;
        $grand_total = $total + $tax;
    }
    ?>
<tr>
<th>Sub_total: </th>
<th></th>
<?php echo '<th> $'.$total.'</th>'; ?>
</tr>

<tr>
<th>Sales Tax of 8.875% </th>
<th></th>
<?php echo '<th> $'.$tax.'</th>'; ?>
</tr>


<tr>
<th> Grand Total </th>
<th></th>
<?php echo '<th> $'.$grand_total.'</th>'; ?>
</tr>

</table>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<form action="confirm.php" method="POST">
<input id="confirm" type=submit value="CONFIRM" name="confirm">
</form>

<script>
$("#confirm").click(function(){
            window.open('confirm_send.php');
            })
</script>

<?php
    //write new information back to data.txt
    if(isset($_POST["confirm"])){
        $f = "data.txt";
        $contents = file_get_contents($f);
        $lines = explode("\n", $contents);
        
        $popeye1=explode(" ",$lines[0]);
        $popeye2=explode(" ",$lines[1]);
        $popeye3=explode(" ",$lines[2]);
        $popeye4=explode(" ",$lines[3]);
        $popeye5=explode(" ",$lines[4]);
        $popeye6=explode(" ",$lines[5]);
        $popeye7=explode(" ",$lines[6]);
        $popeye8=explode(" ",$lines[7]);

        if($_POST["popeye1"]==1)
            $popeye1[1]=intval($popeye1[1])-1;
        if($_POST["popeye2"]==1)
            $popeye2[1]=intval($popeye2[1])-1;
        if($_POST["popeye3"]==1)
            $popeye3[1]=intval($popeye3[1])-1;
        if($_POST["popeye4"]==1)
            $popeye4[1]=intval($popeye4[1])-1;
        if($_POST["popeye5"]==1)
            $popeye5[1]=intval($popeye5[1])-1;
        if($_POST["popeye6"]==1)
            $popeye6[1]=intval($popeye6[1])-1;
        if($_POST["popeye7"]==1)
            $popeye7[1]=intval($popeye7[1])-1;
        if($_POST["popeye8"]==1)
            $popeye8[1]=intval($popeye8[1])-1;
        
        file_put_contents($f," ");
           $fp=fopen($f,'w');
        
           fwrite($fp,implode(" ",$popeye1));
            fwrite($fp,"\n");
           fwrite($fp,implode(" ",$popeye2));
        fwrite($fp,"\n");
           fwrite($fp,implode(" ",$popeye3));
        fwrite($fp,"\n");
           fwrite($fp,implode(" ",$popeye4));
        fwrite($fp,"\n");
           fwrite($fp,implode(" ",$popeye5));
        fwrite($fp,"\n");
           fwrite($fp,implode(" ",$popeye6));
        fwrite($fp,"\n");
           fwrite($fp,implode(" ",$popeye7));
        fwrite($fp,"\n");
           fwrite($fp,implode(" ",$popeye8));
        fwrite($fp,"\n");
        
           fclose($fp);
    }
    ?>

</body>

</html>
