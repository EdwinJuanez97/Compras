//Buscar cliente ventas 
$('#rtn_cliente').keyup(function(e){
    e.preventDefault();

    var cl = $(this).val();
    var action = 'searchCliente';


    $.ajax({
        url: 'ajax.php',
        type: "POST",
        async: true,
        date : {action:action,cliente:cl},
        
        success: function(response)
        {
            console.log(response);
        
        },
        error:function(error){
        }
    });
});
