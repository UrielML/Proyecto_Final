<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/main.css">
	<title>Formulario</title>
	<?php

	 include("include/menu_index.php");

	?>
</head>
<body>

<div class="form__top">
		

		</div>

	<div class="container">
		<div class="form__top">
			<h2>Bienvenido <span>Registro</span></h2>
		</div>		
		<form class="form__reg" method="post" action="" >

			<input class="input" type="text" name="nombre" placeholder="&#128100;  Nombre" required autofocus>
			<input class="input" type="text" name="ap_p" placeholder="&#128100;  Apellido Paterno" required>
			<input class="input" type="text" name="ap_m" placeholder="&#128100;  Apellido Materno" required>
            <input class="input" type="text" name="telefono" placeholder="&#128222;  Telefono" required>
            <input class="input" type="email" name="user" placeholder="&#9993;  Email" required>
            <input class="input" type="password" name="pass" placeholder="&#8962;  Contraseña" required>
            <input class="input" type="password" name="rpass" placeholder="&#8962;  Contraseña" required>
           
            <div class="btn__form">

            	<input class="btn__submit" type="submit" name="registrar" value="Siguiente">
            	<input class="btn__reset" type="reset" value="Cancelar">	
            </div>
            <?php
		if(isset($_POST['registrar'])){
			require("registro.php");
		 }
	   ?>
            <div>
            	
            </div>
		</form>

	</div>
	
	

</body>
</html>
