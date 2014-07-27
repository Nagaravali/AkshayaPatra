<?php
// Create connection
//error_reporting(E_ALL);
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

//take input of meal_type
//$id="select i_id,qty, from rec_ing,ingredient where r_id = (select r_id from receipe where meal_type='rice')";
$veg=$_POST['qty1'];
$ing_name=$_POST['veg'];
$i_id=mysql_query("select i_id from ingredient where i_name='$ing_name'") or die("error in sel");
$row = mysql_fetch_row($i_id);
$rid=mysql_query("insert into stock(i_id,qty) values('$row[0]','$veg')");
echo $rid;
if(!$rid)
echo "error";
?>

INSERT california_authors (au_id, au_lname, au_fname) SELECT au_id, au_lname, au_fname FROM authors WHERE State = 'CA' - See more at: http://www.sqlteam.com/article/using-select-to-insert-records#sthash.q68qxZwN.dpuf