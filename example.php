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





</script>
<?php
ini_set('display_errors','1');
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
//echo "hai";

$rid=mysql_query("select r_id,cost,r_name,protein from receipe where meal_type='rice'");
//echo "first";
//take input of cost 
$Y=0;
	while($r_ary=mysql_fetch_array($rid))
	{	
		$defcost=40001.00;
		$ppl=10;
		if($defcost>=($r_ary['cost']*$ppl))
		{
			$flag=0;
			$row=$r_ary['r_id'];
			//echo $row." ";
			$id=mysql_query("select i_id,qty from rec_ing where r_id ='$row'");	
			//echo "Before while1";
			while($i_ary=mysql_fetch_array($id))
			{
				$var = $i_ary['i_id'];	
				$query = "select i_id,qty from stock where i_id='$var' and qty>0;";
				$stck=mysql_query($query);
				//echo "In while2";
				//echo "Checking".$flag;
				while($check=mysql_fetch_assoc($stck))
				{
					//echo "WHILE";
					if($check['qty']<$i_ary['qty'])
					{
						$sub=mysql_query("select sub,protein from ingredient where i_id='".$i_ary['i_id']."' and sub!=NULL");
						$sub_ary=mysql_fetch_array($sub);
						if(mysql_num_rows($sub)>0)
						{
							$val=($r_ary['protein']-$i_ary['protein'])+$sub_ary['protein'];
							if($val>=$r_ary['protein'])
								echo "Substitute";// PRINT THAT $VAL CALORIES GETS INCREASED IF YOU SUBSTITUTE 
							else
								echo "Else";// PRINT THAT $VAL CALORIES GETS DECREASED IF YOU SUBSTITUTE 
						}
						else
						{
							$flag=1;
							break;
						}    
					}
				}	
				$Y=$Y+1;
				if($flag==0){
					$x=$r_ary['r_name'];
					?>
					<form name=" " action="now.php" method="post">
					<input type="checkbox" name="val" value=<?php echo '".$x."';?> ><?php echo $x;?>
					
			<?php		
			
					}
				}?>
				<input type="submit" value="submit">
					</form>
	<?PHP}
}
	?>
<div style="margin: 1em 0 3em 0; text-align: center;">
</div>
</body>
</html>
