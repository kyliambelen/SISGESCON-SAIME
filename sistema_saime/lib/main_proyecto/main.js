// TABLA 1:: TABLA PRINCIPAL PASAPORTE //

$(document).ready(function() {
    var id, opcion;
    opcion = 4;
    tablaUsuarios = $('#tablaUsuarios').DataTable({

        language: {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados(Registros no existen)",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando Registros del 0 al 0 de un Total de 0 Registros",
            "infoFiltered": "(Filtrado de un Total de _MAX_ Registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        },

        "lengthMenu": [
            [5, 10, 20, 25, 50, -1],
            [5, 10, 20, 25, 50, "Todos"]
        ],
        "iDisplayLength": 5,
        "bJQueryUI": false,



        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',
        buttons: [{
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },

            {
                extend: 'print',
                text: '<i class="fa fa-print"></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-warning'
            },
        ],

        "ajax": {
            "url": "bd/crud.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "cedula" },
            { "data": "nombres" },
            { "data": "sexo" },
            { "data": "tipo" },
            { "data": "pasaporte" },
            { "data": "ubicacion" },
            { "data": "fecha" },
            { "data": "mes" },
            { "data": "ano" },
            { "data": "usuario" },
            { "data": "observacion" },

            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-sm btnEditar'style='background-color:rgb(0,155,193)'><i class='material-icons'>edit</i></button><button class='btn btn-sm btnBorrar'style='background-color:rgb(226,30,72)'><i class='material-icons'>delete</i></button></div>" }
        ]
    });

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formUsuarios').submit(function(e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        cedula = $.trim($('#cedula').val());
        nombres = $.trim($('#nombres').val());
        sexo = $.trim($('#sexo').val());
        tipo = $.trim($('#tipo').val());
        pasaporte = $.trim($('#pasaporte').val());
        ubicacion = $.trim($('#ubicacion').val());
        fecha = $.trim($('#fecha').val());
        mes = $.trim($('#mes').val());
        ano = $.trim($('#ano').val());
        usuario = $.trim($('#usuario').val());
        observacion = $.trim($('#observacion').val());
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            datatype: "json",
            data: { id: id, cedula: cedula, nombres: nombres, sexo: sexo, tipo: tipo, pasaporte: pasaporte, ubicacion: ubicacion, fecha: fecha, mes: mes, ano: ano, usuario: usuario, observacion: observacion, opcion: opcion },
            success: function(data) {
                tablaUsuarios.ajax.reload(null, false);
            }
        });
        $('#modalCRUD').modal('hide');
    });



    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevo").click(function() {
        opcion = 1; //alta           
        user_id = null;
        $("#formUsuarios").trigger("reset");
        $(".modal-header").css("background-color", "#FFBF00");
        $(".modal-header").css("color", "black");

        $(".modal-title").text("AGREGAR PASAPORTE");
        $('#modalCRUD').modal('show');
    });

    //Editar        
    $(document).on("click", ".btnEditar", function() {
        opcion = 2; //editar
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        cedula = parseInt(fila.find('td:eq(1)').text());
        nombres = fila.find('td:eq(2)').text();
        sexo = fila.find('td:eq(3)').text();
        tipo = fila.find('td:eq(4)').text();
        pasaporte = parseInt(fila.find('td:eq(5)').text());
        ubicacion = fila.find('td:eq(6)').text();
        fecha = fila.find('td:eq(7)').text();
        mes = fila.find('td:eq(8)').text();
        ano = parseInt(fila.find('td:eq(9)').text());
        usuario = fila.find('td:eq(10)').text();
        observacion = fila.find('td:eq(11)').text();
        $("#cedula").val(cedula);
        $("#nombres").val(nombres);
        $("#sexo").val(sexo);
        $("#tipo").val(tipo);
        $("#pasaporte").val(pasaporte);
        $("#ubicacion").val(ubicacion);
        $("#fecha").val(fecha);
        $("#mes").val(mes);
        $("#ano").val(ano);
        $("#usuario").val(usuario);
        $("#observacion").val(observacion);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("EDITAR REGISTROS");
        $('#modalCRUD').modal('show');
    });

    //Borrar
    $(document).on("click", ".btnBorrar", function() {
        fila = $(this);
        id = parseInt($(this).closest('tr').find('td:eq(0)').text());
        opcion = 3; //eliminar        
        var respuesta = confirm("¿Está seguro de borrar el registro " + id + "?");
        if (respuesta) {
            $.ajax({
                url: "bd/crud.php",
                type: "POST",
                datatype: "json",
                data: { opcion: opcion, id: id },
                success: function() {
                    tablaUsuarios.row(fila.parents('tr')).remove().draw();
                }
            });
        }


    });

    //----------------------------------------------------//---------------------------------------------//----------------------------------------


    // TABLA 2:: INFORMACION PASAPORTES //

    $(document).ready(function() {
        var id, opcion;
        opcion = 5;
        tablaUsuarios2 = $('#tablaUsuarios2').DataTable({
            language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados(Registros no existen)",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando Registros del 0 al 0 de un Total de 0 Registros",
                "infoFiltered": "(Filtrado de un Total de _MAX_ Registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing": "Procesando...",
            },

            "lengthMenu": [
                [5, 10, 20, 25, 50, -1],
                [5, 10, 20, 25, 50, "Todos"]
            ],
            "iDisplayLength": 5,
            "bJQueryUI": false,

            //para usar los botones   
            responsive: "true",
            dom: 'Bfrtilp',
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> ',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> ',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger'
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> ',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-primary'
                },
            ],



            "ajax": {
                "url": "bd/crud.php",
                "method": 'POST', //usamos el metodo POST
                "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
                "dataSrc": ""
            },
            "columns": [
                { "data": "id" },
                { "data": "cedula" },
                { "data": "nombres" },
                { "data": "sexo" },
                { "data": "tipo" },
                { "data": "pasaporte" },
                { "data": "ubicacion" },
                { "data": "observacion" },

                { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div>" }


            ]
        });

        var fila; //captura la fila, para editar o eliminar
        //submit para el Alta y Actualización
        $('#formUsuarios').submit(function(e) {
            e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
            cedula = $.trim($('#cedula').val());
            nombres = $.trim($('#nombres').val());
            sexo = $.trim($('#sexo').val());
            tipo = $.trim($('#tipo').val());
            pasaporte = $.trim($('#pasaporte').val());
            ubicacion = $.trim($('#ubicacion').val())
            observacion = $.trim($('#observacion').val());

            $.ajax({
                url: "bd/crud.php",
                type: "POST",
                datatype: "json",
                data: { id: id, cedula: cedula, nombres: nombres, sexo: sexo, tipo: tipo, pasaporte: pasaporte, ubicacion: ubicacion, observacion: observacion, opcion: opcion },
                success: function(data) {
                    tablaUsuarios2.ajax.reload(null, false);

                }
            });
        });

    });


});

// final