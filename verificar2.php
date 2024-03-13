<head>
   
		 <link rel="shortcut icon" href="imgc/pressa.ico" />
        <title>1x10</title>

</head>
<b>ESPERE MIENTRAS VERIFICAMOS SU USUARIO</b>
<style type="text/css">
<!--
body {
background-image: url(imgc/cool-tech-pic.jpg);
background-attachment: fixed;
background-repeat: no-repeat;
background-position: center center; 
}
 
 
-->
 

</style>
<?php


error_reporting(0);
$login=$_POST['login'];
$clave=$_POST['clave'];
include("conexion/conexion.php");

$consulta="SELECT * FROM usuario";
$result = mysql_query($consulta,$link);
//$row=mysql_fetch_array($result);
while ($row=mysql_fetch_array($result)){
if($login==$row['login'] and $clave==$row['clave'] and $row['cargo']=="ADMINISTRADOR" and $row['statu']=="ACTIVO" ){
	
		
		
		$ti=$row['cargo'];
		$lo=$_POST['login'];
		$lo2=$_POST['clave'];?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 
<script type="text/javascript">
//<![CDATA[
var t;
var a=1;
 
function envia(){
document.forms["elForm"].submit();
}
 
 
function miFuncion(){
a--;
if(a == 0){
clearInterval(t);
envia();
}
document.getElementById('x').innerHTML = "VERIFICANDO EN " + a + " segs.";
 
}
//]]>
</script>
<script language="JavaScript"> 
function mueveReloj(){ 
momentoActual = new Date() 
hora = momentoActual.getHours() 
minuto = momentoActual.getMinutes() 
segundo = momentoActual.getSeconds() 

str_segundo = new String (segundo) 
if (str_segundo.length == 1) 
segundo = "0" + segundo 

str_minuto = new String (minuto) 
if (str_minuto.length == 1) 
minuto = "0" + minuto 

str_hora = new String (hora) 
if (str_hora.length == 1) 
hora = "0" + hora 

horaImprimible = hora + " : " + minuto + " : " + segundo 

document.form_reloj.reloj.value = horaImprimible 

setTimeout("mueveReloj()",1000) 
} 
</script> 
</head>
<body onload="mueveReloj()">
<div>
<form id="elForm" name="form_reloj" class="login-form" action="admin/index.php" method="post">
<input type='hidden' name='login' value="<?php echo $lo; ?>">
<input type='hidden' name='clave' value="<?php echo $lo2; ?>">
<input type='hidden' name='tipo' value="<?php echo $ti; ?>">
<input class="boradios"  type="hidden" name="reloj" size="10" style="background-color : red; color : White; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;" onfocus="window.document.form_reloj.relo" readonly>
</form>
</div>
<p id="x">VERIFICANDO.</p>
<script type="text/javascript">
//<![CDATA[
t = setInterval('miFuncion()',1000);
//]]>
</script>
</body>
</html>


<?php
}

error_reporting(0);
 
if($login==$row['login'] and $clave==$row['clave'] and $row['cargo']=="ADMINISTRADOR2" and $row['statu']=="ACTIVO" ){
			
		$ti=$row['cargo'];
		$lo=$_POST['login'];
		$lo2=$_POST['clave'];?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 
<script type="text/javascript">
//<![CDATA[
var t;
var a=1;
 
function envia(){
document.forms["elForm"].submit();
}
 
 
function miFuncion(){
a--;
if(a == 0){
clearInterval(t);
envia();
}
document.getElementById('x').innerHTML = "VERIFICANDO EN " + a + " segs.";
 
}
//]]>
</script>
<script language="JavaScript"> 
function mueveReloj(){ 
momentoActual = new Date() 
hora = momentoActual.getHours() 
minuto = momentoActual.getMinutes() 
segundo = momentoActual.getSeconds() 

str_segundo = new String (segundo) 
if (str_segundo.length == 1) 
segundo = "0" + segundo 

str_minuto = new String (minuto) 
if (str_minuto.length == 1) 
minuto = "0" + minuto 

str_hora = new String (hora) 
if (str_hora.length == 1) 
hora = "0" + hora 

horaImprimible = hora + " : " + minuto + " : " + segundo 

document.form_reloj.reloj.value = horaImprimible 

setTimeout("mueveReloj()",1000) 
} 
</script> 
</head>
<body onload="mueveReloj()">
<div>
<form id="elForm" name="form_reloj" class="login-form" action="admin/index2.php" method="post">
<input type='hidden' name='login' value="<?php echo $lo; ?>">
<input type='hidden' name='clave' value="<?php echo $lo2; ?>">
<input type='hidden' name='tipo' value="<?php echo $ti; ?>">
<input class="boradios"  type="hidden" name="reloj" size="10" style="background-color : red; color : White; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;" onfocus="window.document.form_reloj.relo" readonly>
</form>
</div>
<p id="x">VERIFICANDO.</p>
<script type="text/javascript">
//<![CDATA[
t = setInterval('miFuncion()',1000);
//]]>
</script>
</body>
</html>

 
		 
<?php

	}
	
	
	if($login=="" or $clave==""){
		echo '<META HTTP-EQUIV="Refresh" CONTENT="2;URL=index2.html">';
	}
	
	else {
	echo '<META HTTP-EQUIV="Refresh" CONTENT="2";URL=index2.html">';}
}
?>



