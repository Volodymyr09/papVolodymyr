function fillNovasOpcoes(idChave){
    $.ajax({
        url: "AJAX/AJAXGetOptionChave.php",
        type: "post",
        data: {
            idChave: idChave

        },
        success: function (result) {
            alert(result);
            $('#chave').html(result);
        }
    });
}


$('document').ready(function (){
    $('#chaveCategoria').change(function (){


      fillNovasOpcoes($(this).val());
    })
})