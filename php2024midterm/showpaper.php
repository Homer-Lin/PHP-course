<?php require("include.inc") ?>

<body>
    <?php
    session_start();
    if(isset($_SESSION["author"]))
        echo "論文標題".$_POST["title"]."<br/>作者姓名：".$_POST["aName"]."<br/>作者Email：".$_POST["Email"]."<br/>論文摘要：".nl2br($_POST["sum"]);
    else
        echo "<H1> 非法傳送 </H1>";
    ?>
    <br/><br/>
    點擊<A href="logout.php">這裡</A>即可登出
</body>
</html>