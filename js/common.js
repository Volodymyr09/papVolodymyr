function adicionaCarrinho(id){
    alert("O produto esta adicionado ao carrinho!");
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

function confirmaEliminaCarrinho(id) {
    var nomeProduto;
    $.ajax({
        url:"../AJAX/AJAXGetNameProduto.php",
        type:"post",
        data:{
            id:id
        },
        success:function (result){
            nomeProduto=result;
            if(confirm('Confirma que deseja eliminar o produto:'+nomeProduto+'?'))
                window.location="AJAX/AJAXGetCarrinho.php?id=" + id;
        }
    });
}
