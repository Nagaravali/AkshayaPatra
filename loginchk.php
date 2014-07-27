<?php 
		session_start();
		$name = $_POST['username'];
		$passwd = $_POST['pword'];
		echo  "username".$_POST['pword'];
		echo "passwd".$_POST['username'];
		$con=mysql_connect("localhost","root","cfg2014!");
		
		$db=mysql_select_db("apthra");
			
			
			$sql = "select * from login where password='$passwd' and username='$name'";
			$res = mysql_query($sql);
			if(mysql_num_rows($res)!=0){

					$_SESSION['loginame'] = $_POST['username'];
					$_SESSION['passwdlo'] = $_POST['pword'];
											echo "1";
											echo $_SESSION['loginame'];
					
					
			else
					echo "0";
			}
		
?>