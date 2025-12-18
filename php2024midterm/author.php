<?php require("include.inc") ?>

<body>
    <?php
        session_start();
        if(!(isset($_SESSION["login"])) || !($_SESSION["login"] == "yes") || !($_SESSION["type"] == "Author")){
            header("location:fail.php");
        }
        else
            $_SESSION["author"]="yes" ;
    ?>
    <H1> Author您好，歡迎進入論文投稿網頁 </H1>
    <form method=POST action=showpaper.php>
        論文標題：<br/>
        <input type=text name=title><br/>
        作者姓名：<input type=text name=aName><br/>
        作者Email：<input type=text name=Email><br/>

        <br/><br/>
        論文摘要：<br/>
        <textarea name=sum></textarea><br/>
        <input type=submit><br/><br/>

        點擊<A href="logout.php">這裡</A>即可登出
</body>
</html>