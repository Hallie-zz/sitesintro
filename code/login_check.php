<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<?php SESSION_START();
?>
					
<?php  
	if(isset($_POST["login"]) && $_POST["login"] == "登录")  
	{  
		$user = $_POST["username"];  
		$psw = $_POST["password"];
		$apsw=md5($psw);
		$code= $_POST['yanzheng'];   
 
		if($user == "" || $psw == "")  
		{  
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
		}  
		else  
		{  
			if ($_SESSION['code']==$code)  
			{
				//session_destroy(); 
				mysql_connect("localhost","root","");  
				mysql_select_db("hallie");  
				mysql_query("set names utf8"); //设定字符集  
				$sql = "select m_ID,m_key from memebers where m_ID = '$_POST[username]'and m_key ='$apsw'"; 
				$result = mysql_query($sql);  
				$num = mysql_num_rows($result); 
				$row = mysql_fetch_array($result); 
				//echo $row['m_key'];
				if($num)  
				{  
					$_SESSION['username']=$user;
					//$row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中  
					header("Refresh:0;url='index.php'"); 
				}
				else{ 
					echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
				} 
			}
			else{echo "<script>alert('验证码错误！');history.go(-1);</script>";}
		}    
    }
	else  
    {  
       echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
      
  ?>   