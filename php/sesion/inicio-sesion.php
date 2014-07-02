<!DOCTYPE html>
<html lang="es">

<head>
	<title>cineUCAB</title>
	<meta charset="utf-8" />
    
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="/cine/WOWSlider/engine1/style.css" />
	<script type="text/javascript" src="/cine/WOWSlider/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="/cine/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/cine/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="/cine/css/index.css" />
    
    <style>
        div input
        {
            color:black;
        }
    </style>
</head>
    
<body background="/cine/img/wallpaper.jpg">
    <div align="center" style="width:960px; margin: 0 auto;">

        <!-- ENCABEZADO -->
        <div class="row" style="width:inherit; height:196px; background-image:url('/cine/img/wallpaper4.png'); background-size:cover;">
            <div class="col-md-3"><img src="/cine/img/logoUCAB.png" alt="logo" /></div>
            <div class="col-md-3" style="height:100%;"><h1 style="margin:25% 0; color:white;">Cine UCAB</h1></div>
            <div class="col-md-3"></div>
            <div class="col-md-3" style="height:100%;">
                <?php
                    session_start();

                    #si no ha iniciado sesion
                    if(!isset($_SESSION["autentificado"]) || !$_SESSION["autentificado"])
                        echo '<a href="/cine/php/sesion/inicio-sesion.php" style="float:right; color:white;">Iniciar sesi&oacute;n</a>';
                    else
                    {   
                        //$name = $_SESSION["nombre_usuario"];
                        //echo '<script language="javascript">alert("'.$name.'");</script>';
                        //echo $name;
                        
                        echo '<span style="color:white;">'.$_SESSION["nombre_usuario"].'</span><a href="/cine/php/sesion/salir.php" style="float:right; color:white;">Cerrar sesi&oacute;n</a>';
                    }
                ?>
            </div>
        </div>
        <!-- FIN DE ENCABEZADO -->
        
        
        
        <?php #IMAGEN PARA SLIDER
            /*# conexión a la base de datos
            require('php/conectar-bd.php');
            
            $query = "SELECT imagen_portada FROM portadas WHERE id_pelicula = 1";

            if ($resultado = mysqli_query($conexion_bd, $query))
            {
                #resulto bien
                if ($fila = mysqli_fetch_row($resultado))
                {
                    header("Content-Type: image/jpeg");
                    echo $fila[0];
                    mysqli_free_result($resultado);
                }
            }
            mysqli_close ( $conexion_bd );*/
        ?>
        
        <br />
        
        <!-- BARRA DE NAVEGACION -->
        <div class="row" id="barranav" style="width:100%;" >
          <a href="#"><div class="col-md-2" style="border-left-style:none">Inicio</div></a>
          <a href="#"><div class="col-md-2">Cartelera</div></a>
          <a href="#"><div class="col-md-2">Cines</div></a>
          <a href="#"><div class="col-md-2">Próximamente</div></a>
          <a href="#"><div class="col-md-2">Precios</div></a>
          <a href="#"><div class="col-md-2">Acerca de</div></a>
        </div>
        <!-- FIN BARRA DE NAVEGACION -->
        
        <br />
        
        
        
        
        <!-- FORMULARIO INICIO DE SESION -->
        <div role="content" style="background-color:gray; color:white; width:50%; padding:30px;" >
        <form name="inicio_sesion_post_frm" action="control.php?sesion=inicio" method="post" enctype="application/x-www-form-urlencoded">
            <?php
                error_reporting(E_ALL ^ E_NOTICE);
                if($_GET["error"]=="si")
                {
                    echo '<h4 style="color:red;" >Verificar datos</h4>';
                }else
                {
                    echo "<h4>Introduce tus datos</h4>";
                }
            ?>
            
            
            
            <div class="row" style="width:100%;" >
                <div class="col-md-6" style="text-align:right;" >C&eacute;dula de identidad:</div>
                <div class="col-md-6" style="text-align:left;" ><input type="number" name="cedula_num" /></div>
            </div>
            
            <br />
            
            <div class="row" style="width:100%;" >
                <div class="col-md-6" style="text-align:right;" >Contrase&ntilde;a:</div>
                <div class="col-md-6" style="text-align:left;" ><input type="password" name="contrasena_txt" /></div>
            </div>
            
            <br />
            
            <input type="submit" id="iniciar_btn" name="iniciar_btn" value="Iniciar" onclick="validarDatos()" style="color:black" />
        </form>
        </div>
        <!-- FIN FORMULARIO INICIO SESION -->
        
        
        
        
        
    </div>
    
    <?php
        if(isset($_GET['registro']) && $_GET['registro'])
            echo '<script language="javascript">alert("Resgistro exitoso");</script>';
    ?>
    
</body>
</html>





<script>
    function validarDatos()
    {/*
        var verificar = true;
        
        if(!document.inicio_sesion_post_frm.cedula_num.value)
        {
            alert("Cedula de identidad requerida");
            document.inicio_sesion_post_frm.cedula_num.focus();
            verificar = false;
        } else if(!document.inicio_sesion_post_frm.contrasena_txt.value)
        {
            alert("Contrasena requerida");
            document.inicio_sesion_post_frm.contrasena_txt.focus();
            verificar = false;
        }
        
        if(verificar)
            document.inicio_sesion_post_frm.submit();*/
    }
    
    
</script>



<?php
?>