<form method="post">
username:<input type="text" name="un">
password:<input type="password" name="pw"><br><br><br>
        <center> <input type="submit" name="submit" value="submit"></center>
</form>
<?php
if(isset($_POST["submit"])){
   setcookie("username",$_POST['un'],time()+3600);
   setcookie("password", $_POST['pw'], time()+3600);
   echo "cookie is set<br>";
   echo "welcome " .$_POST["un"];
   }
?>