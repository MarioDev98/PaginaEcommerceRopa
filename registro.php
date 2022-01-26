<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="images/likid.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Likid: Registro nuevo</title>
	<?php require_once "scripts.php"; ?>
	 <link rel="stylesheet" href="css/style_index.css">
</head>
<body>

	 <section class="containerId">
        <h2 class="iden">¡Cliente Nuevo!</h2>
        <h4 id="subs">Bienvenido, esto sólo te tomará unos minutos</h4>
        <form id="frmRegistro">
        	
       
        <h3 class="sub">Nombre</h3>
        <input type="text" placeholder="¿Cómo te llamas?" id="nombre" class="email">

        <h3 class="sub">Apellido</h3>
        <input type="text" placeholder="¿Cuáles son tus apellidos?" id="apellido" class="email">

        <h3 class="sub">Usuario</h3>
        <input type="text" placeholder="misuario1233" id="usuario" class="email">

        <h3 class="sub">e-mail</h3>
        <input type="text" placeholder="kaliuch@kal.ka" id="correo" class="email">

        <h3 class="sub">Constraseña</h3>
        <input type="password" placeholder="********" id="password" class="email">
        <div>
              <span class="btn_ingresar" id="registrarNuevo">Registrarme</span>
        </div>
        <br><br>
        </form>
        	<a href="login.php" class="existente">Ya tengo una cuenta</a>

    </section>

<!--
	<br>
<div class="container" style="background-color: #EEDFDC">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-5">
            <div class="panel panel-danger">
                <div class="panel panel-heading" align="center"><h2>Registro de usuario</h2></div>
                <p align="center">¡Vive una experiencia a lo maximo!</p>
                <div class="panel panel-body">
                    <form id="frmRegistro">
                    
                    <label>Nombre</label>
                    <input type="text" class="form-control input-sm" id="nombre" name="" autofocus>
                    
                    <label>Apellido</label>
                    <input type="text" class="form-control input-sm" id="apellido" name="">
                    
                    <label>Usuario</label>
                    <input type="text" class="form-control input-sm" id="usuario" name="">
                    
                    <label>Correo</label>
                    <input type="text" class="form-control input-sm" id="correo" name="">
                    
                    <label>Password</label>
                    <input type="text" class="form-control input-sm" id="password" name="">
                    <p></p>
                    
                    <div align="center">
                    <span class="btn btn-primary" id="registrarNuevo">Registrar</span>
                    </form>
                     <br>
                        <br>
                      <p>¿YA TIENES CUENTA?<a href="login.php"> CLIC AQUI</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
-->
<script type="text/javascript">
        $(document).ready(function () {
               $('#registrarNuevo').click(function(){

            if($('#nombre').val()==""){
                alert("Debes agregar el nombre");
                return false;
            }else if($('#apellido').val()==""){
                alert("Debes agregar el apellido");
                return false;
            }else if($('#usuario').val()==""){
                alert("Debes agregar el usuario");
                return false;
            }else if($('#correo').val()==""){
                alert("Debes agregar el correo");
                return false;
            }else if($('#password').val()==""){
                alert("Debes agregar el password");
                return false;
            }

            cadena="nombre=" + $('#nombre').val() +
                    "&apellido=" + $('#apellido').val() +
                    "&usuario=" + $('#usuario').val() + 
                    "&correo=" + $('#correo').val() + 
                    "&password=" + $('#password').val();

                    $.ajax({
                        type:"POST",
                        url:"php/registro.php",
                        data:cadena,
                        success:function(r){

                            if(r==2){
                                alert("Este usuario ya existe, prueba con otro :)");
                            }
                            else if(r==1){
                                $('#frmRegistro')[0].reset();
                                alertify.success("Agregado con exito");
                            }else{
                                alertify.error("Fallo al agregar");
                            }
                        }
                    });
        });

         });
    </script>
</body>
</html>