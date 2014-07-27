<? php
// Create connection
$con=mysql_connect("localhost","root","cfg2014!");
echo "first";
if(!$con)
{
die("fail to connect");
}
$db=mysql_select_db("apthra");
if(!$db)
{
die("unable to select database");
}

//take input of meal_type
//$id="select i_id,qty, from rec_ing,ingredient where r_id = (select r_id from receipe where meal_type='rice')";
$rid=mysql_query("select r_id from receipe where meal_type='rice'");
echo "first";
	while($r_ary=mysql_fetch_array($rid))
	{
		$id=mysql_query("select i_id,q.qty, from rec_ing q,ingredient where r_id =$r_ary['r_id']");	
		echo "sec";
		while($i_ary=mysql_fetch_array($id))
		{
			echo "3rd";
			$var = $i_ary['i_id'];	
			$stck=mysql_query("select i_id,qty from stock");
			while($check=mysql_fetch_array($stck))
			{
				echo $check['i_id'];
				echo "dojr";
			}
		}
	}
?>
