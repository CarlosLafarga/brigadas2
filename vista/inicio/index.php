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

               <div class="col-md-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <span class="label label-primary pull-right"><?php echo date('m/d/Y'); ?></span>
                            <h5>Buscar CT</h5>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                              <div class="col-md-12">
                              <label>Clave CT</label>
                              <input type="text" name="clavecct" id="clavecct" class="form-control" style="text-transform:uppercase;">
                              <br>
                              </div>
                              <div class="col-md-5">
                              <button type="button" id="buscar" class="btn btn-primary">Consultar</button>
                              </div>
                            </div>


                        </div>
                    </div>
                </div>



                <div id="resultado"  class="col-md-9">

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
