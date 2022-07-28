<?php
setcookie("isauth","", time() - 3600, "/");
setcookie("admin_name","",time() - 3600, "/");
header("location:logadmin")
?>