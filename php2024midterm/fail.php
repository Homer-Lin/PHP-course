<?php require("include.inc") ?>

<body>

<?php

echo "<H1> 登入失敗 </H1>";
echo "<H5> 2秒後跳轉回登入畫面 </H5>";
header("refresh:2 url=logout.php");

?>
</body>
</html>