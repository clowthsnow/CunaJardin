<?php
SESSION_START();

?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Cuna Jardin</title>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Favicons-->
        <link rel="icon" href="<?php echo SERVERURL ?>vistas/images/favicon/favicon-32x32.png" sizes="32x32">


        <!-- CORE CSS-->    
        <link href="<?php echo SERVERURL ?>vistas/css/materialize.css" type="text/css" rel="stylesheet">
        <link href="<?php echo SERVERURL ?>vistas/css/style.css" type="text/css" rel="stylesheet" >
        <link href="<?php echo SERVERURL ?>vistas/css/estilos.css" type="text/css" rel="stylesheet" >


        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
        <link href="<?php echo SERVERURL ?>vistas/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" >


    </head>

    <body>

        <?php
        require_once "./controladores/vistasControlador.php";

        $vista = new vistasControlador();
        $vistaR=$vista->obtener_vistas_controlador();
//        echo "$vistaR";
        if ($vistaR == "login"):
            require_once "login.php";
//    echo 'login';
        else:
            ?>
            <!-- START MAIN -->
            <div id="main">
                <!-- START WRAPPER -->
                <div class="wrapper">

                    <!-- START LEFT SIDEBAR NAV-->
                    <?php include 'inc/menu.inc'; ?>
                    <!-- END LEFT SIDEBAR NAV-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!-- START CONTENT -->
                    <section id="content">
                        <?php require_once "$vistaR";?>
                    </section>
                    <!-- END CONTENT -->


                </div>
                <!-- END WRAPPER -->

            </div>
            <!-- END MAIN -->



            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START FOOTER -->
            <?php include 'inc/footer.inc'; ?>
            <!-- END FOOTER -->


            <!-- ================================================
            Scripts
            ================================================ -->


            <?php include 'inc/scripts.inc'; ?>

        <?php endif; ?>
    </body>

</html>
