
<?php
	if(isset($_POST['btnLogin'])){
        $us = $_POST['txtUsername'];
        $pa = $_POST['txtPass'];
        
        $err = "";
        if($us==""){
            $err .= "Enter Username, please<br>";
        }
        if($pa==""){
            $err .= "Enter password please<br>";
        }

        if($err !=""){
            echo $err;
        }
        else{
            if($us == $pa)
                echo "You have logged in with ".$us." and password is ".$pa;
            else
                echo "You logged in fail";
        }
    }
?>