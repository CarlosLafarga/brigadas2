
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
                    console.log(obj);
                    var renglones = Object.keys(obj.renglon).length;

                    if(renglones > 1){


                       $("#resultado").empty();
                       $("#resultado").html('<div class="row"><div class="col-md-12"><div class="ibox"><div class="ibox-title"><span lass="pull-right"></span><h5>Escuelas </h5></div><div class="ibox-content"><div class="table-responsive"><table  id="escuelas" class="table table-striped table-bordered table-hover dataTables-example"><thead><tr><th>Clave CT</th><th>Nombre Escuela</th><th>Domicilio</th><th>Nivel</th><th>Acciones</th></tr></thead></table></div></div></div></div></div>');
                       listar(data);
                    }

                    }
              });

            });

            var listar = function(data){


            var table = $("#escuelas").DataTable({
                "destroy":true,
                "ajax":{data},
                "columns":[
                    {"renglon":"clave"},
                    {"renglon":"nombrecct"},
                    {"renglon":"domicilio"},
                    {"renglon":"snivel"},
                    {"defaultContent": " <button type='button' class='agregar btn-sm btn-primary'>Consultar</button>"}

                ]
            });


            //agregar_venta("#productos",table);

        }



});

</script>
