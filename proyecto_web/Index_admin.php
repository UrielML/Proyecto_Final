<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./resources/css/reset.css">
	<link rel="stylesheet" href="./resources/css/main.css">
	<title>Formulario</title>
	<?php

	 include("menu_logeado.php");

	?>
</head>
<body>

<div class="form__top">
		

		</div>

	<div class="container">
		<div class="form__top">
			<h2>Red de vecinos <span>Panel de Administrador</span></h2>
		</div>		
		<form class="form__reg" method="post" action="" >
			<div class="texto_proyecto">
       <h3 class="acerca">Idea del proyecto <img  class="imagen_idea" src="./resources/img/about.png"></h3> 
       <div class="texto_proyecto">
       <br>
      <p>Esta plataforma web ha sido realizada por alumnos de la carrera de ingenería de TIC de la Universidad Tecnológica de Tulancingo, y forma parte de un proyecto integrador. Este proyecto fue desarrollado
      con el fin de que el usuario pueda tener una plataforma  en la que apoyarse para llevar un control y gestionar lo que sucede en su colonia, a las personas que son parte de su zona geográfica y poder avisar  a sus demás vecinos en caso de que llegara a suceder alguna situación inesperada o de riesgo, y si se llega  a necesitar, de tener la posibilidad de avisar a las autoridades correspondientes por medio de las "alertas vecinales". 
       <br>
       <br>
       <img  class= "imagen_proyecto" src="./resources/img/vecindario.jpg"> 
       <br>
       <br>
       </p>
       <h3 class="acerca">Beneficios del proyecto <img class="imagen_beneficios" src="./resources/img/beneficios.png"></h3> 
        </div>
       <div class="caja_1">
       <br>
        <img class ="imagen_caja_1" src="./resources/img/seguridad.png">
          <h3 class="acerca_seguridad">Ofrece seguridad en plataforma web y móvil</h3>
          <br>
          <p>Ambas aplicaciones ofrecen seguridad, ya que no cualquier tipo de persona puede ver los datos del grupo vecinal así como su ubicación, a menos que pertenezcan a este, así como también a la cerca perimetral. </p>
       </div>

		
		<div class="caja_2">
		<img class ="imagen_caja_2" src="./resources/img/portable.png">
          <h3 class="acerca_seguridad">Se puede acceder desde dispositivos móviles</h3>
          <br>
          <p>Por comodidad y para ser más práctica esta plataforma web, se puede a acceder a esta tanto con una computadora de escritorio o desde un dispositivo móvil. </p>
      </div>
		
		
      	<div class="caja_3">
		<img class ="imagen_caja_3" src="./resources/img/logo_brush.png">
          <h3 class="acerca_seguridad">Diseño intuitivo</h3>
          <br>
          <p>Tanto la aplicación móvil como esta plataforma web tienen interfaces amigables e intuitivas para que el usuario pueda acceder con facilidad a estas.</p>
      </div>      
</div>
<?php
		include("footer.php");
	?>
    

         
            
            <div>
            	
            </div>
		</form>

	</div>
	
	

</body>
</html>
