<script type="text/javascript">

  $(document).ready(function(){

     listar_escuelas();



   });

   var listar_escuelas = function(){


            var table = $("#escuelas").DataTable({
                pageLength: 10,
                responsive: true,
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../../controllers/buscar_escuela.php"
                },
                "columns":[
                    {"data":"ct_id"},
                    {"data":"clave"},
                    {"data":"nombrecct"},
                    {"data":"domicilio"},
                    {"data":"snivel"},
                    {"defaultContent": '<center><button class="btn btn-primary " type="button"><i class="fa fa-plus"></i>&nbsp;Mas</button></center>'}

                ]
            });


            //agregar_venta("#productos",table);

        }

</script>
