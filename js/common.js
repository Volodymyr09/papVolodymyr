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

function fillNovasOpcoesMotherboard(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionMotherboard.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesMotherboard($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})

function fillNovasOpcoesProcessador(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionProcessador.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesProcessador($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})

function fillNovasOpcoesRAM(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionRAM.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesRAM($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})

function fillNovasOpcoesDisco(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionDisco.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesDisco($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})

function fillNovasOpcoesCaixa(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionCaixa.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesCaixa($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})

function fillNovasOpcoesCooler(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionCooler.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesCooler($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})

function fillNovasOpcoesFonteAlimt(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionFonteAlimt.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesFonteAlimt($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})

function fillNovasOpcoesPGrafica(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionPGrafica.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesPGrafica($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})

function fillNovasOpcoesPSom(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionSom.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesPSom($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})

function fillNovasOpcoesPRede(idCompatibilidadeProduto2, idProduto){
    $.ajax({
        url: "AJAX/AJAXGetOptionPRede.php",
        type: "post",
        data: {
            idCompatibilidadeProduto2: idCompatibilidadeProduto2,
            idProduto: idProduto

        },
        success: function (result) {
            $('#compatibilidadeProduto2').html(result);
        }
    });
};

$('document').ready(function (){
    $('#compatibilidadeProduto1').change(function (){
        fillNovasOpcoesPRede($(this).val(),$('#idCompatibilidadeProduto1').val());
    })
})


