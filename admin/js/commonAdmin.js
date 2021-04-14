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



function confirmaEliminaCategoria(idCategoria) {
    var nomeCategoria;
    $.ajax({
        url:"AJAX/AJAXGetNameCategoria.php",
        type:"post",
        data:{
            idCategoria:idCategoria
        },
        success:function (result){
            nomeCategoria=result;
            if(confirm('Confirma que deseja eliminar a categoria:'+nomeCategoria+'?'))
                window.location="eliminaCategoria.php?id=" + idCategoria;
        }
    })
};


function confirmaEliminaCatChave(idCategoriaChave) {
    var nomeCategoriaChave;
    $.ajax({
        url:"AJAX/AJAXGetNameCategoriaChave.php",
        type:"post",
        data:{
            idCategoriaChave:idCategoriaChave
        },
        success:function (result){
            nomeCategoriaChave=result;
            if(confirm('Confirma que deseja eliminar a Categoria Chave:'+nomeCategoriaChave+'?'))
                window.location="eliminaCategoriaChave.php?id=" + idCategoriaChave;
        }
    })
};


function confirmaEliminaChave(idChave) {
    var nomeChave;
    $.ajax({
        url:"AJAX/AJAXGetNameChave.php",
        type:"post",
        data:{
            idChave:idChave
        },
        success:function (result){
            nomeChave=result;
            if(confirm('Confirma que deseja eliminar a chave:'+nomeChave+'?'))
                window.location="eliminaChave.php?id=" + idChave;
        }
    })
};


function confirmaEliminaNoticia(idNoticia) {
    var tituloNoticia;
    $.ajax({
        url:"AJAX/AJAXGetNameNoticia.php",
        type:"post",
        data:{
            idNoticia:idNoticia
        },
        success:function (result){
        tituloNoticia=result;
            if(confirm('Confirma que deseja eliminar a noticia:'+tituloNoticia+'?'))
                window.location="eliminaNoticia.php?id=" + idNoticia;
        }
    })
};


function confirmaEliminaProduto(idProduto) {
    var nomeProduto;
    $.ajax({
        url:"AJAX/AJAXGetNameProduto.php",
        type:"post",
        data:{
            idProduto:idProduto
        },
        success:function (result){
            nomeProduto=result;
            if(confirm('Confirma que deseja eliminar o produto:'+nomeProduto+'?'))
                window.location="eliminaProduto.php?id=" + idProduto;
        }
    })
};