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
</style>
</head>

<body>
<h1>Welcome to Popeye Magazine Online Store</h1>

<?php
    if(isset($_POST["Submit"])){
        
    }
?>

<h2>Our Available Magazines</h2>

<form action="customer_side.php"
       method="post">

<img src="source/popeye1.jpg">
<h4>Popeye Magazine: 2019 November Issue871</h4>
<p>What music you want to listen now?</p>
In Stock: <input type=text name=popeye1>
<br/>
Price: $<input type=text name= price1>
<br/>
<br/>

<img src="source/popeye2.jpg">
<h4>Popeye Magazine: 2014 JUlY Issue807</h4>
<p>The Portland City Guide </p>
In Stock: <input type=text name=popeye2>
<br/>
Price: $<input type=text name= price2>
<br/>
<br/>

<img src="source/popeye3.jpg">
<h4>Popeye Magazine: 2014 APRIL Issue804</h4>
<p>City Boys ABC </p>
In Stock: <input type=text name=popeye3>
<br/>
Price: $<input type=text name= price3>
<br/>
<br/>

<img src="source/popeye4.jpg">
<h4>Popeye Magazine: 2020 Feb Issue874</h4>
<p>Style Sample 2020 </p>
In Stock: <input type=text name=popeye4>
<br/>
Price: $<input type=text name= price4>
<br/>
<br/>

<img src="source/popeye5.jpg">
<h4>Popeye Magazine: 2017 APRIL Issue840</h4>
<p>Spring fashions </p>
In Stock: <input type=text name=popeye5>
Price: $<input type=text name= price5>
<br/>

<img src="source/popeye6.jpg">
<h4>Popeye Magazine: 2015 Feb Issue814</h4>
<p>Style Sample 2015</p>
In Stock: <input type=text name=popeye6>
<br/>
Price: $<input type=text name= price6>
<br/>
<br/>

<img src="source/popeye7.jpg">
<h4>Popeye Magazine: 2019 APRIL Issue864 </h4>
<p>Taiwan City Guide</p>
In Stock: <input type=text name=popeye7>
<br/>
Price: $<input type=text name= price7>
<br/>
<br/>

<img src="source/popeye8.jpg">
<h4>Popeye Magazine: 2019 MAY Issue865</h4>
<p>Tokyo, My Street</p>
In Stock: <input type=text name=popeye8>
<br/>
Price: $<input type=text name= price8>
<br/>
<br/>


</body>

</html>

