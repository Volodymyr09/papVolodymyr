function fillNovasOpcoes(idChave){
    $.ajax({
        url: "AJAX/AJAXGetOptionChave.php",
        type: "post",
        data: {
            idChave: idChave

        },
        success: function (result) {

            $('#chave').html(result);
        }
    });
}

function confirmaElimina(idChave,idProduto) {
    var nomeChave, nomeProduto;
    //  alert('elimina chave '+idChave+' no produto '+idProduto);
    $.ajax({
        url:"AJAX/AJAXGetNameChave.php",
        type:"post",
        data:{
            idChave:idChave
        },
        success:function (result){
           nomeChave=result;

        }
    });
    $.ajax({
        url:"AJAX/AJAXGetNameProduto.php",
        type:"post",
        data:{
            idProduto:idProduto
        },
        success:function (result){
            nomeProduto=result;
            if(confirm('Confirma que deseja eliminar a chave '+nomeChave+' no produto '+nomeProduto+'?'))
                window.location="eliminaProdutoChave.php?chvId=" + idChave + "&prdId=" + idProduto;
        }
    });

};


$('document').ready(function (){
    $('#chaveCategoria').change(function (){


      fillNovasOpcoes($(this).val());
    })
})