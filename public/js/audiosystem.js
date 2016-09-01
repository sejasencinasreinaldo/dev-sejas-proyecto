/**
 * Created by Sejas on 29/08/2016.
 */

$(document).on("submit",".form_entrada",function(e){

//funcion para atrapar los formularios y enviar los datos

    e.preventDefault();

    $('html, body').animate({scrollTop: '0px'}, 200);

    var formu=$(this);
    var quien=$(this).attr("id");

    if(quien=="f_nuevo_usuario"){ var varurl="agregar_nuevo_usuario"; var divresul="notificacion_resul_fanu"; }
    if(quien=="f_editar_usuario"){ var varurl="editar_usuario"; var divresul="notificacion_resul_feu"; }
    if(quien=="f_cambiar_password"){ var varurl="cambiar_password"; var divresul="notificacion_resul_fcp"; }



    $("#"+divresul+"").html($("#cargador_empresa").html());

    $.ajax({

        type: "POST",
        url : varurl,
        datatype:'json',
        data : formu.serialize(),
        success : function(resul){

            $("#"+divresul+"").html(resul);
            if(quien=="f_nuevo_usuario"){
                $('#'+quien+'').trigger("reset");
            }



        }



    });


})

$(document).on("submit",".formarchivo",function(e){

    e.preventDefault();
    var formu=$(this);
    var nombreform=$(this).attr("id");

    if(nombreform=="f_subir_imagen" ){ var miurl="subir_imagen_usuario";  var divresul="notificacion_resul_fci"}
    //información del formulario
    var formData = new FormData($("#"+nombreform+"")[0]);

    //hacemos la petición ajax
    $.ajax({
        url: miurl,
        type: 'POST',

        // Form data
        //datos del formulario
        data: formData,
        //necesario para subir archivos via ajax
        cache: false,
        contentType: false,
        processData: false,
        //mientras enviamos el archivo
        beforeSend: function(){
            $("#"+divresul+"").html($("#cargador_empresa").html());
            
        },
        //una vez finalizado correctamente
        success: function(data){
            $("#"+divresul+"").html(data);
            $("#fotografia_usuario").attr('src', $("#fotografia_usuario").attr('src') + '?' + Math.random() );
        },
        //si ha ocurrido un error
        error: function(data){
            alert("ha ocurrido un error") ;

        }
    });
});

$(document).ready(function(){
    $('.btn-editar').click(function(){
        var row =$(this).parents('tr');
        var id=row.data('id');

        $("#capa_modal").show();
        $("#capa_para_edicion").show();
        var url = "editar_usuario/"+id+"";

        $("#capa_para_edicion").html($("#cargador_empresa").html());

       $.get(url,function(resul){
           $("#capa_para_edicion").html(resul);

        })
    })

    $('.btn-eliminar').click(function(){
        var row=$(this).parents('tr');
        var id=row.data('id');
        var url = "eliminar_usuario/"+id+"";
        row.fadeOut();
        $.get(url,function(resul){


        }).fail(function(){
            alert("ocurrio un error el usuario no fue eliminado");
            row.show();
        });
    });
    $('.btn-ver').click(function(){

        var row=$(this).parents('tr');
        var id=row.data('id');

        $("#capa_modal").show();
        $("#capa_para_edicion").show();
        var url = "ver_usuario/"+id+"";

        $.get(url,function(resul){
            $("#capa_para_edicion").html(resul);
        });

    });


});

$(document).on("click",".div_modal",function(e){
    //funcion para ocultar las capas modales
    $("#capa_modal").hide();
    $("#capa_para_edicion").hide();
    $("#capa_para_edicion").html("");

})


