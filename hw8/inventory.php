<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>
<head>
    <title>WEB hw8 Inventory</title>
<style>
img{
width: 250px;
height: 250px
}

</style>
</head>

<body>
<h1> Popeye Magazine Inventory Page </h1>
<form action="inventory.php"
       method="post">
<p style="color: green;"> WEB HW8 Chen </p>
<img src="source/popeye1.jpg">
<h4>Popeye Magazine: 2019 November Issue871</h4>
<p>What music you want to listen now?</p>
In Stock: <input type=text name="popeye1">
<br/>
Price: $<input type=text name="price1">
<br/>
<br/>

<img src="source/popeye2.jpg">
<h4>Popeye Magazine: 2014 JUlY Issue807</h4>
<p>The Portland City Guide </p>
In Stock: <input type=text name="popeye2">
<br/>
Price: $<input type=text name="price2">
<br/>
<br/>

<img src="source/popeye3.jpg">
<h4>Popeye Magazine: 2014 APRIL Issue804</h4>
<p>City Boys ABC </p>
In Stock: <input type=text name="popeye3">
<br/>
Price: $<input type=text name="price3">
<br/>
<br/>

<img src="source/popeye4.jpg">
<h4>Popeye Magazine: 2020 Feb Issue874</h4>
<p>Style Sample 2020 </p>
In Stock: <input type=text name="popeye4">
<br/>
Price: $<input type=text name= "price4">
<br/>
<br/>

<img src="source/popeye5.jpg">
<h4>Popeye Magazine: 2017 APRIL Issue840</h4>
<p>Spring fashions </p>
In Stock: <input type=text name="popeye5">
<br/>
Price: $<input type=text name= "price5">
<br/>

<img src="source/popeye6.jpg">
<h4>Popeye Magazine: 2015 Feb Issue814</h4>
<p>Style Sample 2015</p>
In Stock: <input type=text name="popeye6">
<br/>
Price: $<input type=text name= "price6">
<br/>
<br/>

<img src="source/popeye7.jpg">
<h4>Popeye Magazine: 2019 APRIL Issue864 </h4>
<p>Taiwan City Guide</p>
In Stock: <input type=text name="popeye7">
<br/>
Price: $<input type=text name= "price7">
<br/>
<br/>

<img src="source/popeye8.jpg">
<h4>Popeye Magazine: 2019 MAY Issue865</h4>
<p>Tokyo, My Street</p>
In Stock: <input type=text name="popeye8">
<br/>
Price: $<input type=text name="price8">
<br/>
<br/>

<input type=submit value="Save Changes" name="submit">
<input type=reset value=Cancel>

</form>

<?php
    if(isset($_POST["submit"])){
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
        
        if(isset($_POST["popeye1"]) && $_POST["popeye1"]!=NULL) $popeye1[1]=$_POST["popeye1"];
        if(isset($_POST["price1"])&& $_POST["price1"]!=NULL) $popeye1[2]=$_POST["price1"];
           
        if(isset($_POST["popeye2"])&& $_POST["popeye2"]!=NULL) $popeye2[1]=$_POST["popeye2"];
        if(isset($_POST["price2"])&& $_POST["price2"]!=NULL) $popeye2[2]=$_POST["price2"];
        
        if(isset($_POST["popeye3"])&& $_POST["popeye3"]!=NULL) $popeye3[1]=$_POST["popeye3"];
        if(isset($_POST["price3"])&& $_POST["price3"]!=NULL) $popeye3[2]=$_POST["price3"];
        
        if(isset($_POST["popeye4"])&& $_POST["popeye4"]!=NULL) $popeye4[1]=$_POST["popeye4"];
        if(isset($_POST["price4"])&& $_POST["price4"]!=NULL) $popeye4[2]=$_POST["price4"];
           
        if(isset($_POST["popeye4"])&& $_POST["popeye5"]!=NULL) $popeye5[1]=$_POST["popeye5"];
        if(isset($_POST["price4"])&& $_POST["price5"]!=NULL) $popeye5[2]=$_POST["price5"];
           
        if(isset($_POST["popeye5"])&& $_POST["popeye6"]!=NULL) $popeye6[1]=$_POST["popeye6"];
        if(isset($_POST["price5"])&& $_POST["price6"]!=NULL) $popeye6[2]=$_POST["price6"];
           
        if(isset($_POST["popeye6"])&& $_POST["popeye7"]!=NULL) $popeye7[1]=$_POST["popeye7"];
        if(isset($_POST["price6"])&& $_POST["price7"]!=NULL) $popeye7[2]=$_POST["price7"];
    
        if(isset($_POST["popeye7"])&& $_POST["popeye8"]!=NULL) $popeye8[1]=$_POST["popeye8"];
        if(isset($_POST["price7"])&& $_POST["price8"]!=NULL) $popeye8[2]=$_POST["price8"];
           
        file_put_contents($f,"");
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
