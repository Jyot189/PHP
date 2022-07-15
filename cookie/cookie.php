<?php
echo "welcome cookie";

// systax to set the cookie 
echo time();
setcookie("category","Books",time() + 86400,"/");

?>