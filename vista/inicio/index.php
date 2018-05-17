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
                  <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Buscar Escuela</h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">
                              <form class="form-horizontal">
                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Clave:</label>
                                    <div class="col-lg-10"><input type="text"  placeholder="Clave del centro trabajo" class="form-control">
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
              </div>
          </div>






<?PHP include "../../include/element/footer.php";?>
</div>
</div>


</body>

<?PHP include "../../include/element/js_principal.php";?>
<?PHP include "../../include/element/js_buscarescuela.php";?>


</html>
