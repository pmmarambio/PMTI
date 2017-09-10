<?php
$link = mysql_pconnect("localhost","root","12345678")or die("No puede conectarse a la Base de Datos");
mysql_select_db("pruebasphp")or die("No puede conectarse a pruebasphp");

$arr = array();
$rs = mysql_query("SELECT EmployeeID, LastName, FirstName, Country, City, Title FROM Employees");

while($obj = mysql_fetch_object($rs)){
	$arr[] = $obj;
}
//aderir linea que especifique que tiene q ser tipo JSON
header("Content-type: application/json"); 

echo "{\"data\":" .json_encode($arr). "}";
?>