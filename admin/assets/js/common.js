function fillTableCategoria(txt='') {
    $.ajax({
        url: "AJAXFillCategoria.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}