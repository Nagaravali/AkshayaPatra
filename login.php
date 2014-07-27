<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="bred<" />
	<meta name="keywords" content="bred<" />
	<meta name="description" content="bred<" />
	<meta name="robots" content="all" />
	<title>AKSHAYA PATRA</title>

	<style type="text/css" title="currentStyle" media="screen">
		@import "./css/global.css";
	</style>
    
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="wrapper">

    <div id="logo">
	   
	</div>   
	<div id="top">
	    
          
    	<h1 class="logo"><img border="25" src="logo.jpg" alt="logo" width="220" height="70" align="left"><span class="green1"></span></h1>
        <ul id="topnavi">
        	<li><a href="../sravan/index.html">HOME</a></li>
        	<li><a href="../sravan/aboutus.html">ABOUT US</a></li>
        	<li><a href="../sravan/ourwork.html">OUR WORK</a></li>
        	<li class="active"><a href="../sravan/login.html">LOGIN</a></li>
        </ul>
    </div>
    <div id="header">
    	<img src="img/header.jpg" alt="" width="1000" height="183" />
    </div>
    <div id="main">
    	<div id="left-part">
        	
            <h1>Note</h1>
            <p>->Only Admin and the End user can acces by logging using their Username and Password</p>
        </div>
    	<div id="right-part">
        	<script type = "text/javascript">

// Note: Like all Javascript password scripts, this is hopelessly insecure as the user can see 
//the valid usernames/passwords and the redirect url simply with View Source.  
// And the user can obtain another three tries simply by refreshing the page.  
//So do not use for anything serious!



}

</script>
<?php
// Create connection
$con=mysql_connect("localhost","root","cfg2014!");
if(!$con)
{
die("fail to connect");
}
$db=mysql_select_db("apthra");
if(!$db)
{
die("unable to select database");
}
$name= $_POST['username'];
$pwd=$_POST['pword'];
$name= $_POST['username'];
$pwd=$_POST['pword'];
if($name=='admin' && $pwd='admin123'){
?>
<a href="http://ec2-54-179-138-128.ap-southeast-1.compute.amazonaws.com/sravan/lgnadmin.html">CLICK HERE TO CONTINUE</a>

	<?php 
	exit();
	}else{
		
		
	
	
//echo $name;
//echo $pwd;
$data=mysql_query("select * from login where username='$name' and password='$pwd'");
$count=mysql_num_rows($data);
if ($count==1) {
    ?>
<a href="http://ec2-54-179-138-128.ap-southeast-1.compute.amazonaws.com/sravan/userpage.html">CLICK HERE TO CONTINUE</a>
<?php
} else {
    echo "Unsuccessful!";
	echo "wrong username or password";
}
}
?>


<div style="margin: 1em 0 3em 0; text-align: center;">
</div>
</body>
</html>