// Populando combobox de Cidades com Ajax
$("#estado").on("change",function(){
    var idEstado = $("#estado").val();
     
    $.ajax({
        url: 'pega_cidades.php',
        type: 'POST',
        data:{id:idEstado},
        beforeSend: function(){
            $("#labelCidade").css({'display':'block'});
            $('#cidade').css({'display':'block'});                      
            $("#cidade").html("Carregando...");
        },
        success: function(data){
            $("#labelCidade").css({'display':'block'});
            $('#cidade').css({'display':'block'});                      
            $("#cidade").html(data);
        },
        error: function(data){
            $("#labelCidade").css({'display':'block'});
            $('#cidade').css({'display':'block'});                      
            $("#cidade").html("Houve um erro ao carregar.");
        }
    });
});

