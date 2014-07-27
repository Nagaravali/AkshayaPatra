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
	    
          
    	<h1 class="logo"><img border="2" src="" alt="logo" width="220" height="100" align="left"><span class="green1"></span></h1>
        <ul id="topnavi">
        	<li class="active"><a href="#">HOME</a></li>
        	<li><a href="#">ABOUT US</a></li>
        	<li><a href="#">OUR WORK</a></li>
        	
        	<li><a href="#">LOGIN</a></li>
        </ul>
    </div>
    <div id="header">
    	<img src="img/header.jpg" alt="" width="1000" height="183" />
    </div>
    <div id="main">
    	<div id="left-part">
        	<h1>Category</h1>
            <ul id="subnavi">
                <li class="active"><a href="#">Seasonal Special</a></li>
                <li><a href="#">New Reciepe</a></li>
                <li><a href="#">Meal History</a></li>
                <li><a href="#">Sponsors</a></li>
                <li><a href="#">Diet Chart</a></li>
                
            </ul>
            
            <h1>Additional content</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ornare elementum neque at lobortis. 
            Fusce ac orci diam. Ut ac tellus in lorem commodo vulputate a vitae ligula. Proin nisl lectus, lacinia id 
            egestas eu, hendrerit id purus.</p>
        </div>
    	<div id="right-part">
        	<script>
		function validateLogin()
		{
			var x=document.getElementById("name").value;
			if(x==null || x=="")
			{
				alert("Name field must be filled out");
				return false;
			}
			var y=document.getElementById("usn").value;
			if(y==null || y=="")
			{
				alert("Password field must be filled out");
				return false;
			}
			if(httpreq()){
				return true;
			}
			return false;
	}
</script>
<?php
$service = $_POST['val'];
echo $service;
?>



<div style="margin: 1em 0 3em 0; text-align: center;">
</div>
</body>
</html>