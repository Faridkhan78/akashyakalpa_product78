<?php
session_start();

if(isset($_SESSION['username'])){
echo 'Welcome to '. $_SESSION['username'];
}else
{
    echo "Please Login in Continue ";
}
?>