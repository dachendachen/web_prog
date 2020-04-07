<!dictype html>

<html>

	<head>
<title> Web Assignment Pig Latin</title>
<meta charset="utf-8">
	</head>

	<body>
	<h1>Pig Latin:</h1>
	<br/>
	<P>Chen Huang </P>
	<p>Web Programming Assign 5</p>
	<br/>

	<form id="input" action="assign5.php" method="post">
	<h4>ANY WORDS OR SENTENCE:
	<br/>
	<input type="text" name="input" id="input">
	</h4>	
	
	<h4>Do you want to it convert to Pig Latin?</h4>
	<br/>
	<br/>
	<input type="radio" name="yes" id="yes"> YES
	<input type="radio" name="no" id="no"> NO
    <input type="submit" name ="submit"/>
	</form>

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['yes'])){
            //do the pig latin conversion
            $input = $_POST['inpute'];
            $arr = explode(" ", $input);
            $result = "";
            for($k=0;$k<count($arr);$k++){
                $pl = pl_convertor(arr[$k]);
                $result= $result.$pl." ";
            }
            echo "Pig Latin Done:\n";
            echo result;
        }
    }
    
    //input parameter is a string
    function pl_convertor($str){
        $vowels = array('a','e','u','i','o');
        //if the word start from a vowel, adding -way at the end
        $len = strlen($str);
        $str = strtolower($str);
        //character array:
        $char = str_split($str);
        for($i=0; $i<$len;$i++){
            if(in_array($char[$i],$vowels){
               if($i == 0){
               $str = $str."-way";
               }
               else{
                    $str = substr($str,0,$i-1);
               $str = $str."-";
               for($j=0;$j<$i,$j++){
                    $str = $str.$char[$j];
               }
               $str = $str."ay";
               }
               }
        }
               return $str;
    }
    ?>

	</body>


</html>










