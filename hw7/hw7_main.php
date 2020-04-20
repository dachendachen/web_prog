<!doctype html>

<html>
<head>
	<title>Assignment 7</title>
</head>
<body bgcolor=yellow>

	<p>Chen, web programming hw7</p>

	<h1>Please vote for your favorite Animation!!!</h1>
    <h4>Assume Everyone choosing ONLY ONE of animation in below</h4>

	<form name="form"action="hw7_main.php"method="post">

	<input type="radio" name="naruto">NARUTO
	<br/>
	<br/>

	<input type="radio" name="yourname" >Your Name
	<br/>
	<br/>

	<input type="radio" name="onepiece" >One Piece
	<br/>
	<br/>

	<input type="radio" name="mob" >Mob Psycho
	<br/>
	<br/>

	<input type="radio" name="onepunch" >One Punch Man
	<br/>
	<br/>

	<p>Please Enter Your Email:</p>
	<input type="text" name="email">
	<br/>
	<br/>
	<input type="submit" name="submit" value="Submit" onclick="valid(document.form.email)" />
	<input type="reset" value="Cancel"/>

	</form>

    
    <?php
        if(isset($_POST['submit'])){
            //set the choice

            if(isset($_POST['naruto'])){
                $choice = "naruto";
            }
           if(isset($_POST['yourname'])){
                $choice = "yourname";
            }
            if(isset($_POST['onepiece'])){
                $choice = "onepiece";
                       }
            if(isset($_POST['mob'])){
                $choice = "mob";
                       }
           if(isset($_POST['onepunch'])){
                $choice = "onepunch";
                       }
            if(isset($_POST['email'])){
                $email = $_POST['email'];
                //check duplicate
                if(voted($email)){
                $file = 'info.txt';
                file_put_contents($file,$email." ".$choice."\n", FILE_APPEND);
                    print "<br/>";
                    print "Thank you for voting!!";
                }
                else{
                    print "<br/>";
                    print "You've submitted your choice!";
                    }
            }
        }
        
        function voted($e){
            $content = file_get_contents('info.txt');
            $data = explode("\n",$content);
            for($i = 0; $i < sizeof($data); $i++){
                $line = explode(" ",$data[$i]);
                $em = $line[0];
                if($e === $em){
                    return false;
                }
            }
            return true;
        }

    ?>

</body>
    <script>
    //js check radio button is checked and check email format
    //email format
    function valid(email){
        var expr = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email.value.match(expr))return true;
        else{
        alert("OOOOOOps, You Have Entered An Invalid Email Address!");
        return false;
        }
    }
/*
    if(document.querySelector('input[type="radio"]:checked') == null) {
        window.alert("OOOOps, You need to choose an option!");
    }
*/

    </script>

</html>

