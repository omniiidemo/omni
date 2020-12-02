
<?php
 // Get values passe from from in index.php file
  $username =POST['username'];
  $password =POST['password'];
  
 // to prevent mysql injection
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);
  
 // connect to the server and select database
  mysql_connect("localhost", "root", "");
  mysql_select_db('bitnami_opencart');
  
 // Query the database for user 
   $result = mysql_query("swlwct * from users where username ='$username' and password = '$password'")
   		or die("Failed to query database ".mysql_error());
   $row = mysql_fetch_array($result);
   if ($row['username'] == $username && $row['password'] == $password ){
	echo "login success !! welcome ".$row['userbane'];
     } else {
     	 echo "Failed to Login!";
     	 }
?>
     	 		   		
