<?php require("include.inc") ?>

<body>
    <?php
    session_start();
    
    $cAc01="chair";
    $cPw01="123";
    $cAc02="reviewer";
    $cPw02="234";
    $cAc03="author";
    $cPw03="345";   
    
    if($_POST["type"] == "Chair" && $_POST["ac"] == $cAc01 && $_POST["pw"] == $cPw01){
        $_SESSION["login"]="yes";
        $_SESSION["type"]=$_POST["type"];
        setcookie("name" ,$_POST["ac"],time()+(60*60*24*7));
        header("location:chair.php");
    }
    elseif($_POST["type"] == "Reviewer" && $_POST["ac"] == $cAc02 && $_POST["pw"] == $cPw02){
        $_SESSION["login"]="yes";
        $_SESSION["type"]=$_POST["type"];
        setcookie("name" ,$_POST["ac"],time()+(60*60*24*7));
        header("location:reviewer.php");
    }
    elseif($_POST["type"] == "Author" && $_POST["ac"] == $cAc03 && $_POST["pw"] == $cPw03){
        $_SESSION["login"]="yes";
        $_SESSION["type"]=$_POST["type"];
        setcookie("name" ,$_POST["ac"],time()+(60*60*24*7));
        header("location:author.php");
    }
    else{
        header("location:fail.php");
    }

    
    ?>
</body>
</html>