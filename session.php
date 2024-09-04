<?php 
// session is used to store informaton in variabel at different pages
//used to manage information across different page

// verify the user login info

session_start();
$_SESSION["username"]="Farid";
$_SESSION['favCat']="Books";
echo "we have saved your session";

echo $_SESSION['username'];
?>