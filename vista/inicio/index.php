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





                <div id="resultado"  class="col-md-12">
                   <div class="ibox">
                            <div class="ibox-title">
                                <span class="pull-right label label-primary"><?php echo date('m/d/Y'); ?></span>
                                <h5>Escuelas</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table  id="escuelas" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>CLAVE</th>
                                    <th>NOMBRECT</th>
                                    <th>DOMICILIO</th>
                                    <th>NIVEL</th>
                                    <th>ACCIONES</th>
                                  </tr>
                                </thead>

                            </table>


                            </div>
                            </div>
                      </div>
                </div>







          </div>
          </div>






<?PHP include "../../include/element/footer.php";?>
</div>
</div>


</body>

<?PHP include "../../include/element/js_principal.php";?>
<?PHP include "../../include/element/js_buscarescuela.php";?>


</html>
