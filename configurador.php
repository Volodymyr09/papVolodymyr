<?php
include_once("includes/body.inc.php");
top();
?>

<section id="contact">
    <div class="inner">
        <section>
            <header class="major">
                <h1>Configurador</h1>
            </header>





            <form method="post" action="#">
                <div class="fields">



                    <div class="field half">
                        <label for="field-1">Processador</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Processador Intel Socket 1150</option>
                            <option value="">Processador AMD Socket AM3</option>
                            <option value="">-- Choose --</option>

                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Placa Motherboard</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Placa Motherboard GIGABYTE H81m-Hd3 1150</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Memória RAM</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Memória RAM DDR4 GSKILL Aegis (1 x 8 GB - 2133 MHz)</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Cooler CPU</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Cooler CPU NOX Hummer H-212 120mm Universal</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Disco</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Disco HDD Externo WESTERN DIGITAL Elements(1.5TB-USB3.0)</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Caixa PC</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Caixa PC ATX KOLINK Inspire K1(ATX Mid Tower-Preto RGB)</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Fonte de Alimentação</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Fonte de Alimentação KOLINK Core(ATX-500 W-80 Plus)</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Placa Grafica</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Placa Gráfica ASUS GeForce GTX 1050Ti Phoenix(NVIDIA-4GB DDR5)</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Placa de Som</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Placa de som ASUS Xonar U5</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Placa de Rede</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Placa de rede PCI D-LINK DGE-528T Gigabit</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Sistema Operativo</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">Software MICROSOFT Win Home FPP 10(1Dispositivo-Vitalicio-PC)</option>
                            <option value="">-- Choose --</option>
                            <option value="">-- Choose --</option>
                        </select>
                    </div>

                    <div class="field half">
                        <label for="field-1">Montagem do Computador</label>

                        <select>
                            <option value="">-- Choose --</option>
                            <option value="">-- Sim --</option>
                            <option value="">-- Não --</option>
                        </select>
                    </div>

                    <div class="field half">


                    </div>


                    <div class="field half text-right">
                        <ul class="actions">
                            <li> <a href="#" data-toggle="modal" data-target="#checkout1"><span class="label"></span> <input type="submit" value="Comprar" class="primary" /></a></li>
                        </ul>
                    </div>
                </div>
            </form>

        </section>
        <section class="split">
            <section>
                <br>
                <div class="contact-method">
                    <span class="icon alt fa-credit-card"></span>
                    <h3>Preço Total</h3>
                    <span>$ 975.00</span>
                </div>


            </section>
        </section>
    </div>
</section>
<div class="modal fade" id="checkout1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="validationServer01" class="form-label">Primeiro Nome</label>
                        <input type="text" class="form-control" id="validationServer01"  required>

                    </div>
                    <div class="col-md-6">
                        <label for="validationServer02" class="form-label">Apelido</label>
                        <input type="text" class="form-control" id="validationServer02" required>

                    </div>
                    <div class="col-md-6">
                        <label for="inputTelephone4" class="form-label">Telemóvel</label>
                        <input type="email" class="form-control" id="inputTelephone4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
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

