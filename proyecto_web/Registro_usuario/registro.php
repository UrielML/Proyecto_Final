<?php

	$nombre=$_POST['nombre'];
	$ap_p=$_POST['ap_p'];
	$ap_m=$_POST['ap_m'];
	$telefono=$_POST['telefono'];
	$mail=$_POST['user'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE correo='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Usuario ya registrado");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$nombre','$ap_p','$ap_m','$telefono','$mail', SHA('$pass'),'1')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado correctamente");</script> ';
				

				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>