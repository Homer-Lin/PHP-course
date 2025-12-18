<?php require("include.inc") ?>

<body>
    <?php
        session_start();
        if(!(isset($_SESSION["login"])) || !($_SESSION["login"] == "yes") || !($_SESSION["type"] == "Reviewer")){
            header("location:fail.php");
        }
        else
            $_SESSION["reviewer"]="yes" ;
    ?>
    <H1> Reviewer您好，歡迎進入論文評論網頁 </H1>
    <form method=POST action=showreview.php>
        論文評審決定：<br/>
        <input type=radio name=decide value="Accept">Accept<br/>
        <input type=radio name=decide value="Minor Revision">Minor Revision<br/>
        <input type=radio name=decide value="Major Revision">Major Revision<br/>
        <input type=radio name=decide value="Reject">Reject<br/>

        <br/><br/>
        論文評論評語：<br/>
        <textarea name=judge></textarea><br/>
        <input type=submit><br/><br/>

        點擊<A href="logout.php">這裡</A>即可登出
</body>
</html>