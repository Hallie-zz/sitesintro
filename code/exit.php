<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php SESSION_START();
?>
					
<?php  
 	$_SESSION[username]=NULL;
	session_destroy();
    header("Refresh:0;url='index.php'");  
  ?>  