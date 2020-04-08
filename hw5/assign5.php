<!doctype html>

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

    <input type="radio" name="yes"> YES
    <input type="radio" name="no"> NO
    <br/>
    <input type="submit" name ="submit"/>
    </form>

<div>

<?php
    if(isset($_POST['submit'])){
        $input = $_POST['input'];
        if(isset($_POST['yes'])){
            //do the pig latin conversion
            pl_convertor($input);
            }
        else{
            print "<h2> Your input is: </h2>";
            print "<br/>";
            print $input;
        }
    }
    
    //input parameter is a LONG string
    function pl_convertor($input){
        //store the punctuation
        $punc = $input[strlen($input)-1];
        $input[-1] =" ";
        $input= trim($input);
        $vowels = array('a','e','u','i','o','I','E','U','A','O');
        $arr = explode(" ", $input);
        print "<h3> Pig Latin Done: </h3>";
        print "<h4> ";
        for($k=0;$k<count($arr);$k++){
            if($k!=0)$arr[$k]=strtolower($arr[$k]);
            //print "<br/>";
         //print $arr[$k];
           //print "<br/>";
            for($i=0; $i<strlen($arr[$k]);$i++){
                //if the word start from a vowel, adding -way at the end
                if(in_array($arr[$k][$i],$vowels)){
                    if($i==0){
                        $str= $arr[$k]."-way";
                    }
                    else{
                        $str = substr($arr[$k],$i);
                        $str = $str."-";
                        for($j=0;$j<$i;$j++){
                            $str = $str.$arr[$k][$j];
                        }
                        $str = $str."ay";
                    }
                    if($k!=0){
                        $str = " ".$str;
                    }
                    print $str;
                    break;
                }
            }
        }
        print $punc; //refresh the punctuation
          print "</h4>";
    }
    ?>
</div>


    </body>


</html>

