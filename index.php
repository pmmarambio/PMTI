<!doCTYpe html> 
<?php
	echo 'inicio index';
//Local Exitoso
$link = mysql_pconnect("localhost","root","root")or die("No puede conectarse a la Base de Datos");
//remoto exitoso
//$link = mysql_pconnect("190.3.171.23","barlosp_btest","btest2016.,")or die("No puede conectarse a la Base de Datos");
//mysql_select_db("barlosp_barlotest")or die("No puede conectarse a pruebasphp");
if(!$link)
{
	echo 'error';
}else{
	echo 'exitoso';
}	
?>
<html> 
	<head> 
		<link href="css/kendo.metro.min.css" rel="stylesheet"> <link href="css/kendo.common.min.css" rel="stylesheet"> <script src="js/jquery.min.js"></script>
			<script src="js/kendo.all.min.js"></script>
	</head>
	<body> <div id="grid"></div> 
		<script>
        $(function() {
            $("#grid").kendoGrid({
                dataSource: {
                    transport: {
                        read: "data/employees.php"
                    },
                    schema: {
                        data: "data"
                    }
                },
                columns: [{ field: "FirstName" }, { field: "LastName" }, { field: "Country" }, { field: "City" }, { field: "Title" }]
            });
        });
		</script> 
	</body>
</html> 