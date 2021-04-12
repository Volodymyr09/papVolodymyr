<?php
include_once("includes/body.inc.php");
top();
?>


<div class="container">
    <section>
        <header class="major">
            <h1>Carrinho de compra</h1>
        </header>

        <table class='table table-striped table-hover' width="70%">
            <tr>
                <th width="3%">Id</th>
                <th width="50%">Nome</th>
                <th width="22%">Imagem</th>
                <th width="7%">Preço</th>
                <th >Quant.</th>
                <th width="5%">&nbsp;</th>
            </tr>
            <tr>
                <td>#1</td>
                <td>Motherboard ASUS XPTO 175HZ</td>
                <td><img src="images/hardwareLogo.jpg" width="120"></td>
                <td>250.00&euro;</td>
                <td><span class="btn-sm btn-light"> - </span> <span class="text-center pl-1 pr-1">1</span> <span  class="btn-sm btn-light">+</span></td>
                <td><img src="images/trash_tb.png" width="18"> </td>
            </tr>
            <tr>
                <td>#2</td>
                <td>Monitor Gammer AOC</td>
                <td><img src="images/MonitorGamAOC.jpg" width="120"></td>
                <td>250.00&euro;</td>
                <td><span class="btn-sm btn-light"> - </span> <span class="text-center pl-1 pr-1">1</span> <span  class="btn-sm btn-light">+</span></td>
                <td><img src="images/trash_tb.png" width="18"> </td>
            </tr>
        </table>
    </section>

    <div class="field half text-right">
        <ul class="actions">
            <li> <a href="#" data-toggle="modal" data-target="#checkout"><span class="label"></span> <input type="submit" value="Comprar" class="primary" /></a></li>
        </ul>
    </div>
</div>

<div class="modal fade" id="checkout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="validationServer01" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="validationServer01"  required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputTelephone4" class="form-label">Telemóvel</label>
                        <input type="email" class="form-control" id="inputTelephone4">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Morada</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">País</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Pagamento</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>Pagamento a cobrança</option>
                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-warning">Finalizar</button>
            </div>
        </div>
    </div>
</div>

<?php
Bottom();
?>

