<!-- START CONTENT -->
<section id="content">

    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title">Crear Discoteca</h5>
                    <ol class="breadcrumb">
                        <li class=" grey-text lighten-4">Kardex
                        </li>
                        <li class="active blue-text" >Crear Discoteca</li>

                    </ol>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--start container-->
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="section">
                    <div id="roboto">
                        <h4 class="header">Creación de Nuevas Discotecas</h4>
                        <p class="caption">
                            En este panel usted podra crear nuevas discotecas .
                        </p>
                        <div class="divider"></div>
                        <div class="row">
                            <!-- Form with validation -->
                            <div class="col offset-l2 s12 m12 l8">
                                <div class="card-panel">
                                    <h4 class="header2">Nueva Discoteca</h4>
                                    <div class="row">
                                        <form id="create" class="col s12" action="control/crearDiscoteca.php" method="POST">
                                            <div class="row">
                                                <div class="input-field col s12">

                                                    <input id="prov" type="text" class="validate" name="nombre" required="">
                                                    <label for="prov">Nombre:</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Registrar
                                                        <i class="mdi-image-edit left"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

