<?php
//Local Correcto
$link = mysql_pconnect("localhost","root","root")or die("No puede conectarse a la Base de Datos");
mysql_select_db("mysqltest")or die("No puede conectarse a pruebasphp");


//remoto Correcto
//$link = mysql_pconnect("190.3.171.23","barlosp_btest","btest2016.,")or die("No puede conectarse a la Base de Datos");
//mysql_select_db("barlosp_barlotest")or die("No puede conectarse a pruebasphp");

$arr = array();
$rs = mysql_query("SELECT EmployeeID, LastName, FirstName, Country, City, Title FROM employees");

while($obj = mysql_fetch_object($rs)){
	$arr[] = $obj;
}
//aderir linea que especifique que tiene q ser tipo JSON
header("Content-type: application/json"); 

echo "{\"data\":" .json_encode($arr). "}";
?>