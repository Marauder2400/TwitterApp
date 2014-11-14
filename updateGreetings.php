<?php

$connect = mysql_connect("localhost","root", "0509725250");
            if (!$connect) {
                die(mysql_error());
            }
mysql_select_db("TwitterApp");

$var = $_POST['ID'] ;
$action = $_POST['action'];

if($action== "like") 
	{
$sql = "UPDATE followers SET Liked='liked' WHERE ID='$var'";
$result = mysql_query($sql) or die(mysql_error($sql));

}

if($action== "unlike") 
	{
$sql = "UPDATE followers SET Liked='unlike' WHERE ID='$var'";
$result = mysql_query($sql) or die(mysql_error($sql));
}

//added for testing
echo 'var = '.$var;


?>
