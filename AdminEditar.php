<?php
include_once("includes/body.inc.php");
top();
?>



<div id="main" class="container">

    <!-- One -->
    <section id="one">
        <div class="inner">

            <header class="major">
                <h1>Editar</h1>

            </header>
            <div class="container">
                <div class="row">
                    <form method="post" action="#">
                        <div class="field half">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <br>
                        <div class="field half">
                            <label for="subname">Sub-Nome</label>
                            <input type="text" name="subname" id="subname" />
                        </div>
                        <br>
                        <div class="field half">
                            <label for="name">imagem</label>
                            <input type="submit" value="Adicionar Imagem" class="primary" />
                        </div>
                        <br>
                        <div class="field half">
                            <label for="preço">Preço</label>
                            <input type="text" name="preço" id="preço" />
                        </div>
                        <br>
                    </form>
                </div>
            </div>

            <div class="field half text-right">
                <ul class="actions">
                    <li><input type="submit" value="Editar" class="primary" /></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="tiles">


    </section>

</div>


<?php
Bottom();
?>

