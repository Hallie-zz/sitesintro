<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
   <?php SESSION_START();
?>
    <?php  
        if(isset($_POST["register"]) && $_POST["register"] == "注册")  
        {  
            $user = $_POST["username"];  
            $psw = $_POST["password"]; 
			$apsw=md5($psw);
            $psw_confirm = $_POST["confirm"];  
            if($user == "" || $psw == "" || $psw_confirm == "")  
            {  
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }  
            else  
            {  
                if($psw == $psw_confirm)  
                {  
                    mysql_connect("localhost","root","");   //连接数据库  
                    mysql_select_db("hallie");  //选择数据库  
                    mysql_query("set names utf8"); //设定字符集  
                    $sql = "select m_ID from memebers where m_ID = '$_POST[username]'"; //SQL语句  
                    $result = mysql_query($sql);    //执行SQL语句  
					$num = mysql_num_rows($result); //统计执行结果影响的行数  
                    if($num)    //如果已经存在该用户  
                    {  
                        echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                    }  
                    else    //不存在当前注册用户名称  
                    {  
                        switch(@$_POST['sex']){
							case 2:$sql_insert = "insert into memebers (m_ID,m_key,m_nickname,m_gender,m_address,m_tel) values('$_POST[username]','$apsw','$_POST[nickname]','man','$_POST[address]','$_POST[phonenum]')";
							break;	
							case 3:$sql_insert = "insert into memebers (m_ID,m_key,m_nickname,m_gender,m_address,m_tel) values('$_POST[username]','$apsw','$_POST[nickname]','woman','$_POST[address]','$_POST[phonenum]')";
							break;
							default:
							$sql_insert = "insert into memebers (m_ID,m_key,m_nickname,m_gender,m_address,m_tel) values('$_POST[username]','$apsw','$_POST[nickname]','','$_POST[address]','$_POST[phonenum]')";
						}
						
						//$sql_insert = "insert into memebers (m_ID,m_key,m_nickname,m_gender,m_address,m_tel) values('$_POST[username]','$apsw','$_POST[nickname]','$_POST[sex]','$_POST[address]','$_POST[phonenum]')";  
                        $res_insert = mysql_query($sql_insert);  
                        //$num_insert = mysql_num_rows($res_insert);  
                        if($res_insert)  
                        {   
							//$row = mysql_fetch_array($result); 
							//$_SESSION['id']=$row['id'];
							$_SESSION['username']=$user;
							
							echo "注册成功!";
							header("Refresh:2;url='index.php'");
							/*echo "<script>alert('注册成功！');history.go(-1);</script>";		  	*/          
						}  
                        else  
                        {  
                            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                        }  
					}    
				}
                else  
                {  
                    echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
                } 
			}				
        }    
        /*else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        }  */
    ?>  