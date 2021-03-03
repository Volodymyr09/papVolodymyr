<?php
include_once("includes/body.inc.php");
top();
?>

<!-- Main -->
<div id="main" class="alt">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Contactos</h1>
            </header>
            <span class="image main"><img src="images/map.jpg" alt="" /></span>
            <p></p>
        </div>
    </section>

</div>

<!-- Contact -->
<section id="contact">
    <div class="inner">
        <section>
            <header class="major">
                <h2>Contactos</h2>
                <p>Pode contactar com a loja  das 9:00 até 17:00</p>
            </header>

            <form method="post" action="#">
                <div class="fields">
                    <div class="field half">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field half">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="subject">Objetivo</label>
                        <input type="text" name="subject" id="subject" />
                    </div>
                    <div class="field">
                        <label for="message">Notas</label>
                        <textarea name="message" id="message" rows="6"></textarea>
                    </div>

                    <div class="field half text-right">
                        <ul class="actions">
                            <li><input type="submit" value="Enviar mensagem" class="primary" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
        <section class="split">
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-envelope"></span>
                    <h3>E-mail</h3>
                    <a href="#">contact@company.com</a>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-phone"></span>
                    <h3>Telefone</h3>
                    <span>+1 333 4040 5566</span>
                    <br>
                    <span>+1 333 5550 3366</span>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-home"></span>
                    <h3>Endereço</h3>
                    <span>212 Barrington Court <br> New York, ABC 10001 <br> Portugal</span>
                </div>
            </section>
        </section>
    </div>
</section>


<?php
Bottom();
?>
