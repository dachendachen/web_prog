

<!doctype html>

<html>
<head>
    <title>HW 7 Summary Page</title>
<style>
img{
width:50px;
height:25px;
}
</style>
</head>
<body bgcolor=yellow>
    <p>Chen, web programming hw7 GD</p>

    <h1>Results Of Animation Poll</h1>

    <form action="hw7_sum.php"method="post">

    <input type="radio" name="email"> Email List
    <br/>
    <br/>
    <input type="radio" name="Histogram"> Histogram
    <br/>
    <br/>
    <input type = "Submit" name = "Submit" value = "click one to submit">
    </form>

<?php
    
    function draw_gd($n,$num){
            for($j=0;$j<$n;$j++){
                echo "<img src=\"$num.php\">";
            }
        }
    if(isset($_POST["Submit"])){
        $file='info.txt';
        $data = file_get_contents($file);
        $line = explode("\n",$data);
        
    if(isset($_POST["email"])){
        print "<br/>";
        print "List Of Responses: <br/>";
        for ($i = 0; $i < sizeof($line); $i++){
            if($line[$i]!=""){
                print $i." ".$line[$i]."<br/>";
            }
        }
    }
    if(isset($_POST["Histogram"])){
        print "<br/>";
        print "Chart of Poll Results: <br/>";
        print "<br/>";
        
        $naruto=0; $yourname =0; $onepiece = 0;
        $mob = 0; $onepunch = 0;
        
        for($i = 0; $i < sizeof($line); $i++){
            $anime = explode(" ",$line[$i]);
            if(trim($anime[1])==="naruto") $naruto ++;
            else if(trim($anime[1])==="yourname") $yourname ++;
            else if(trim($anime[1])==="mob") $mob ++;
            else if(trim($anime[1])==="onepiece") $onepiece ++;
            else if(trim($anime[1])==="onepunch") $onepunch ++;
        }
        

        print "<div>Naruto</div>"; draw_gd($naruto,1);
        print "<br/>";
        print "<div>Your Name </div>"; draw_gd($yourname,2);
        print "<br/>";
        print "<div>Mob Psycho</div>"; draw_gd($mob,3);
        print "<br/>";
        print "<div>One Piece</div>"; draw_gd($onepiece,4);
        print "<br/>";
        print "<div>One Punch Man</div>"; draw_gd($onepunch,5);
        print "<br/>";

 
        
    }
    }
?>

</body>
</html>
