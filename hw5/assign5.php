

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['yes'])){
            //do the pig latin conversion
            $input = $_POST['input'];
            $arr = explode(" ", $input);
            $result = "";
            for($k=0;$k<count($arr);$k++){
                $pl = pl_convertor(arr[$k]);
                $result= $result.$pl." ";
            }
            echo "<h2>Pig Latin Done:\n</h2>";
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
