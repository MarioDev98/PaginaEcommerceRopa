<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/likid.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Likid: registro</title>
     <?php require_once "scripts.php"; ?>
     <link rel="stylesheet" href="css/style_index.css">
</head>

<body>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel panel-body">
            <section class="containerId">
                <h2 class="iden">Identifícate</h2>
                <div>
                    <h3 class="sub">Usuario</h3>
                    <input type="text" placeholder="kaliuch@kal.ka" id="usuario" class="email">
                    <h3 class="sub">Contraseña</h3>
                    <input type="password" placeholder="********" id="password" class="email">
                </div>
                <div>
                <span class="btn_ingresar"  id="entrarSistema">Ingresar</span>
                 <a href="registro.php" class="nuevo">¿Eres cliente nuevo? Registrate</a>
                </div>
            </section>
                  </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

</body>

</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#entrarSistema').click(function(){
            if($('#usuario').val()==""){
                alert("Debes agregar el usuario");
                return false;
            }else if($('#password').val()==""){
                alert("Debes agregar el password");
                return false;
            }

            cadena="usuario=" + $('#usuario').val() + 
                    "&password=" + $('#password').val();

                    $.ajax({
                        type:"POST",
                        url:"php/login.php",
                        data:cadena,
                        success:function(r){
                            if(r==1){
                                window.location="index1.php";
                            }else{
                               alertify.error("Fallo al entrar");
                            }
                        }
                    });
        }); 
        
    });
</script>