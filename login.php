<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href=“localhost/login.php/css_root/flaticon.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<div class="main2">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<a href="index.php" class="salir">
				<button  class="botonsalir"><img  src="https://www.flaticon.es/svg/vstatic/svg/3917/3917759.svg?token=exp=1654092798~hmac=1b21bd31eaded1f2d9217072f9f602f5" 
				style="width:25px;"></img></button></a>
			
				<form action="registrou.php" method="POST">
					<label for="chk" aria-hidden="true">Registrar</label>
					<input type="text" name="txtnombre" placeholder="Nombre" required>
					<input type="text" name="txtdocumento" placeholder="Documento" required>
					<input type="email" name="txtemail" placeholder="Correo electronico" required>
					<input type="password" name="txtpassword" placeholder="Clave" required>
					<button type="submit" name="btnregistro">  Registrarse</button>
				</form>
			</div>

			<div class="login">
				<form action="validar.php" method="POST">
					<label for="chk" aria-hidden="true">Iniciar Sesion</label>
					<input type="email" name="usuario" placeholder="Correo electronico" required="">
					<input type="password" name="password" placeholder="Clave" required="">
					<button>Iniciar sesion</button>
				</form>
			</div>
	</div>
</body>
</html>