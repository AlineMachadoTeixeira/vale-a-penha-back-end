<?php
require_once "inc/cabecalho.php";
?>


        <p class="descricao">Use esse espaço para tornar o bairro <span class="spanformulario">ainda melhor</span>.<br>
            <b>Envie aqui suas sugestões, críticas e dicas.</b>
        </p>
        <section class="container">
            <form id="form" action="https://formspree.io/f/mvonybwj" method="post">
                <fieldset>
                    <legend><b>Fale conosco</b></legend>
                    <br>
                    <div class="campo">
                        <label for="nome">Nome:
                            <input type="text" name="nome" id="nome" placeholder="Nome" required>
                        </label>
                    </div>
                    <div class="campo">
                        <label for="email">Email:
                            <input type="email" name="email" id="email" placeholder="E-mail" required>
                        </label>
                    </div>
                    <div class="campo">
                        <label for="tel">Celular:
                            <input type="tel" name="tel" id="tel" placeholder="(xx) xxxx-xxxx" required>
                        </label>
                    </div>
                    <div class="campo">
                        <label for="mensagem">Mensagem:
                            <textarea name="mensagem" id="mensagem" required></textarea>
                        </label>
                    </div>
                    <button type="submit" id="submit">Enviar</button>
                    <p id="status"></p>

                </fieldset>
            </form>

        </section>
        <?php
require_once "inc/rodape.php";
?>