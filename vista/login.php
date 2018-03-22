<!DOCTYPE html>
<html>
    <head>
       <?php include "../include/element/css_init.php";?>
    </head>
    <body class="gray-bg">
        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>
                    <h1 class="logo-name">
                        SICAT
                    </h1>
                </div>
                <h3>
                    Bienvenido a SICAT
                </h3>
                <p>
                        SISTEMA INTEGRAL DE CONTROL DE AULAS DE TECNOLOGÍA
                    <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
                </p>
                <p>

                </p>
                <form method="POST" action="" class="m-t" role="form">
                    <div class="form-group">
                        <input name="user" class="form-control" placeholder="Usuario" required="" type="text">
                        </input>
                    </div>
                    <div class="form-group">
                        <input name="pswd" class="form-control" placeholder="Contraseña" required="" type="password">
                        </input>
                    </div>
                    <button name="iniciar" class="btn btn-primary block full-width m-b" type="submit">
                        Iniciar Sesion
                    </button>

                </form>

            </div>
        </div>
        <!-- Mainly scripts -->
        <?php include "../include/element/js_init.php";?>
    </body>
</html>
<?PHP

require_once "sesion.class.php";
require_once "../controllers/initController.php";
$sesion = new sesion();

if (isset($_POST["iniciar"])) {

    $usuario  = $_POST["user"];
    $password = sha1($_POST["pswd"]);

    if (validarUsuario($usuario, $password) == true) {

        $sesion->set("usuario", $usuario);
        echo "<script language='JavaScript'>";
        echo "location = 'inicio/'";
        echo "</script>";

    } elseif (validarUsuario($usuario, $password) == false) {

        echo '<script>
              swal({
              title: "Algo Anda Mal!",
              text: "Usuario y contraseña incorrecto",
              type: "error",
              showCancelButton: false,
              confirmButtonColor: "#1ab394",
              confirmButtonText: "Aceptar",
              closeOnConfirm: true
              },
              function(){
              window.location.href="login.php";
              });
              </script> ';
    }
}
?>