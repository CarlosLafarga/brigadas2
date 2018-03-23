
<script type="text/javascript">

  $(document).ready(function(){




        var consulta;
        //hacemos focus al campo de búsqueda
        $("#clavecct").focus();

        //comprobamos si se pulsa una tecla
        $('#buscar').on('click', function(){

                  //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#clavecct").val();
              //hace la búsqueda
              $.ajax({
                    type: "POST",
                    url: "../../controllers/buscar_escuela.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                    //imagen de carga
                    $("#resultado").html('<div class="col-xs-12"><div class="spiner-example"><div class="sk-spinner sk-spinner-wave">CARGANDO<div class="sk-rect1"></div>&nbsp;<div class="sk-rect2"></div>&nbsp;<div class="sk-rect3"></div>&nbsp;<div class="sk-rect4"></div>&nbsp;<div class="sk-rect5"></div>&nbsp;</div></div></div>');
                   // $('#ibox1').children('.ibox-content').toggleClass('sk-loading');
                    },
                    error: function(){
                    alert("error petición ajax");
                    },
                    success: function(data){
                    var obj = JSON.parse(data);
                    //console.log(obj.renglon[0].clave);

                    var renglones = Object.keys(obj.renglon).length;




                       $("#resultado").empty();

                       $("#resultado").append('<table class="table table-bordered"><thead><tr><th>Clave</th><th>Escuela</th><th>Domicioio</th><th>Nivel</th></tr></thead><tbody id="body">');
                       for (var i = 0;   i < renglones; i++) {

                        console.log(obj.renglon[i].clave);

                        $("#body").append("<tr><td>"+obj.renglon[i].clave+"</td><td>"+obj.renglon[i].nombrecct+"</td><td>"+obj.renglon[i].domicilio+"</td><td>"+obj.renglon[i].snivel+"</td></tr>");

                       }


                       $("#resultado").append("</tbody></table>");


                    }
              });

            });





});

</script>
