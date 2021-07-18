function adicionaCarrinho(id){

    $.ajax({
        url:"admin/AJAX/AJAXNovoProdutoCarrinho.php",
        type:"post",
        data: {
            idPrd:id
        },
        success:function(result){
            alert("O produto esta adicionado ao carrinho!");
        }
    });
}

function confirmaEliminaCarrinho(idProduto) {
    var nomeProduto;
    $.ajax({
        url:"admin/AJAX/AJAXGetNameProduto.php",
        type:"post",
        data:{
            idProduto:idProduto
        },
        success:function (result){
            nomeProduto=result;
            if(confirm('Confirma que deseja eliminar o produto:'+nomeProduto+'?')){
                $.ajax({
                    url:"admin/AJAX/AJAXEliminaProdutoCarrinho.php",
                    type:"post",
                    data: {
                        idPrd:idProduto
                    },
                    success:function(result){
                        alert("O produto eliminado do carrinho!");
                    }
                });
            }
        }
    });
}


function atualizaCarrinho(valor,idProduto){
    if(valor>0){
        $.ajax({
            url:"admin/AJAX/AJAXAtualizaProdutoCarrinho.php",
            type:"post",
            data:{
                idPrd:idProduto,
                quant:valor
            },
            success:function (result){
                location.reload();
            }
        });
    }


}


function mostrarDetalhes(id){
    $('#detalhes'+id).toggle();
}


