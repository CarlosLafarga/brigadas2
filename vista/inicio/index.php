<?php

@require_once "../sesion.class.php";
$sesion  = new sesion();
$usuario = $sesion->get("usuario");

if ($usuario == false) {

    echo "<script language='JavaScript'>";
    echo "location = '../login.php'";
    echo "</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>SICAT</title>
  <?PHP include "../../include/element/css.php";?>

</head>
<body class="top-navigation">
     <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
          <?PHP include "../../include/element/menu.php";?>


          <div class="wrapper wrapper-content">
              <div class="container">
                  <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Buscar Escuela</h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" >
                              <div class="form-group">
                                <label class="col-lg-2 control-label">Clave:</label>
                                  <div class="col-lg-10"><input type="text" maxlength="10" placeholder="Clave CT" class="form-control">
                                    </div>
                              </div>


                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-search"></i>&nbsp;Buscar</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>


                <!-- RESULTADO DE LA BUSQUEDA-->
                <div class="col-lg-9">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Datos de Clave:</h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">
                        <!--INICIO DEL CONTENT-->

                        <!--DATOS ESCOLARES-->
                        <div class="hr-line-solid"></div>
                        <h3 class="text-danger">DATOS ESCOLARES</h3>
                        <table class="table">
                        <tbody>
                        <tr>
                            <td><label>CLAVE CT:</label>&nbsp;26DPR0001D</td>
                            <td><label>NOMBRE CT:</label>&nbsp;SIERVO DE LA NACION</td>
                            <td><label>TURNO:</label>&nbsp;MATUTINO</td>
                        </tr>

                        <tr>
                            <td><label>DOMICILIO:</label>&nbsp;CUMURIPA Y PEDRO MENDEZ </td>
                            <td><label>MUNICIPIO:</label>&nbsp;NAVOJOA</td>
                            <td><label>LOCALIDAD:</label>&nbsp;PUEBLO MAYO</td>
                        </tr>

                        <tr>
                            <td><label>NOMBRE DIRECTOR:</label>&nbsp;26DPR0001D</td>
                            <td><label>TELEFONO:</label>&nbsp;6623953551</td>
                            <td><label>CELULAR:</label>&nbsp;6421126388</td>
                        </tr>

                        </tbody>
                        </table>

                        <!--COMPARTE EDIFICIO-->
                        <div class="hr-line-solid"></div>
                        <h3 class="text-danger">COMPARTE EDIFICIO</h3>

                           <table class="table">
                        <tbody>
                        <tr>
                            <td><label>CLAVE CT:</label>&nbsp;26DPR0001D</td>
                            <td><label>NOMBRE CT:</label>&nbsp;SIERVO DE LA NACION</td>
                            <td><label>TURNO:</label>&nbsp;MATUTINO</td>
                        </tr>

                        <tr>
                            <td><label>DOMICILIO:</label>&nbsp;CUMURIPA Y PEDRO MENDEZ</td>
                            <td><label>MUNICIPIO:</label>&nbsp;NAVOJOA</td>
                            <td><label>LOCALIDAD:</label>&nbsp;PUEBLO MAYO</td>
                        </tr>

                        <tr>
                            <td><label>NOMBRE DIRECTOR:</label>&nbsp;26DPR0001D</td>
                            <td><label>TELEFONO:</label>&nbsp;6623953551</td>
                            <td><label>CELULAR:</label>&nbsp;6421126388</td>
                        </tr>

                        </tbody>
                        </table>

                        <!--EQUIPAMIENTO-->
                        <div class="hr-line-solid"></div>
                        <h3 class="text-danger">EQUIPAMIENTO</h3>

                        <table class="table">
                        <tbody>
                        <tr>
                            <td><label>EQUIPO:</label>&nbsp;25</td>
                            <td><label>EQUIPO REAL:</label>&nbsp;25</td>
                            <td><label>EQUIPAMIENTO:</label>&nbsp;2005</td>
                            <td><label>REEQUIPAMIENTO:</label>&nbsp;2008</td>
                        </tr>

                        </tbody>
                        </table>


                        <!--FIN DEL CONTENT-->
                        </div>
                    </div>
                </div>

                <!-- FIN DEL RESULTADO  DE LA BUSQUEDA-->
              </div>
          </div>






<?PHP include "../../include/element/footer.php";?>
</div>
</div>


</body>

<?PHP include "../../include/element/js_principal.php";?>
<?PHP include "../../include/element/js_buscarescuela.php";?>


</html>
