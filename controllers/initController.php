 <?PHP

require_once '../conexion/conect.php';

function validarUsuario($usuario, $password)
{
    $cn       = Conectarse();
    $consulta = "select * from ct_users where usuario = '" . $usuario . "' AND pswd = '" . $password . "';";

    $result = mysql_query($consulta, $cn) or die(mysql_error());

    if (mysql_num_rows($result) > 0) {

        return true;

    } else {

        return false;

    }

}
?>