function saludar() {

    var nombre="";

    nombre = $("#Nombre").val();

    alert("hola "+ nombre)

}

$( document ).ready(function() {

    $('#formpensamiento').on('click', function(e) {

        e.preventDefault();

       // alert("Hola mundo")

       var datos = $("#formpensamiento").serialize();

       // alert('Datos serializados: '+datos);

       var url="../Backend/Personas/GuardarPensamiento.php"

       

        $.ajax({

            type: "POST",

            url: url,

            data: datos,

            //dataType: "json",

            success: function(data) {

                        //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this

                        // do what ever you want with the server response

                        $("#listarpensamiento").load('../Backend/Personas/listarpenasmientos.php');   

                },

            error: function() {

                        alert('se presento algun error');

                }

            });

        });



});