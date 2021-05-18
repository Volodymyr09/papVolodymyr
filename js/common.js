function adicionaCarrinho(id){
    alert(id);
    $.ajax({
        url:"admin/AJAX/AJAXNovoProdutoCarrinho.php",
        type:"post",
        data: {
            idPrd:id
        },
        success:function(result){

        }
    });
}

function confirmaEliminaCarrinho(idProduto) {
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
    });
}
