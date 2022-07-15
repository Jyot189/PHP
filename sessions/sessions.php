<?php
echo"sessions";
//used to manage information across difference pages
session_start();
$_SESSION["username"]="jyot";
$_SESSION["favcat"]="node js";
echo"sessions is save";
?>