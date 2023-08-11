<? 
date_default_timezone_set("Asia/Bangkok");
$objConnect = mysql_connect("localhost","user_db","password_db") or die("Error Connect to Database");
$objDB = mysql_select_db("db_name");
mysql_query("SET NAMES UTF8");
?>