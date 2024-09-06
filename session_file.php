<!-- <strong>Test Form</strong>
<form action="" method="post">
    <input type="text" name="picturenum"/>
    <input type="submit" name="Submit" value="Submit!" />
</form> -->






<strong>Test Form</strong>
<form action="" method="post">
<input type="text" name="picturenum"/>
<input type="submit" name="Submit" value="Submit!" />
</form>

<?php 
 
 // starting the session
 session_start();


 if (isset($_POST['Submit'])) { 
 $_SESSION['picturenum'] = $_POST['picturenum'];
 } 
?> 

<strong><?php echo $_SESSION['picturenum'];?></strong>