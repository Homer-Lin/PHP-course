<?php require("include.inc") ?>

<body>
    <?php
    session_start();
    if(isset($_SESSION["reviewer"]))
        echo "論文老師決定".$_POST["decide"]."<br/><br/>論文評論評語：<br/>".nl2br($_POST["judge"]);
    else
        echo "<H1> 非法傳送 </H1>";
    ?>
    <br/><br/>
    點擊<A href="logout.php">這裡</A>即可登出
</body>
</html>