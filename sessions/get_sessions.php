<?php
session_start();

echo "welcome". $_SESSION["username"];
echo "category".$_SESSION["favcat"];
?>