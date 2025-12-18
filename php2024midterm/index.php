<?php require("include.inc") ?>

<body>
    <H1> 高大資管論文投稿系統 </H1>
    <form method=POST action=check.php>
    請選擇您的角色：<select name=type size=1>
    <option> Chair </option>
    <option> Reviewer </option>
    <option> Author </option>
    </select>
    <br/>
    <?php
        echo "帳號：<input type=text name=ac value=".@$_COOKIE["name"]."><br/>"
    ?>
    密碼：<input type=password name=pw><br/>

    <br/>
    <input type=submit> 
</body>
</html>
