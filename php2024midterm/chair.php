<?php require("include.inc") ?>

<body>
    <?php
        session_start();
        if(!(isset($_SESSION["login"])) || !($_SESSION["login"] == "yes") || !($_SESSION["type"] == "Chair")){
            header("location:fail.php");
        }
    ?>

    <H1> This is the page of Chair </H1>
    點擊<A href="logout.php">這裡</A>即可登出
</body>
</html>