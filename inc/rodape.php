</main>
<footer>
    <div class="container-footer">
        <img id="logo-footer" src="assets/images/logo-Vale-a-Penha.svg" alt="logo vale a penha">
        <section class="footer-nav">
            <a href="index.php">Início</a>
            <a href="gastronomia.php">Gastronomia</a>
            <a href="comercio-local.php">Comércio&nbsp;Local</a>
            <a href="lazer.php">Lazer</a>
            <a href="cultura.php">Cultura</a>
            <a href="educação.php">Educação</a>
            <a href="historia.php">História</a>
            <a href="voce-em-foco.php">Você&nbsp;em&nbsp;Foco</a>
        </section>
        <section class="footer-emojis">
            <div class="emojis">
                <img src="assets/images/mano-do-ceu.svg" alt="emoji mano do ceu">
                <img src="assets/images/demoro.svg" alt="emoji demoro">
                <img src="assets/images/pode-cre.svg" alt="emoji pode cre">
                <img src="assets/images/ta-osso.svg" alt="emoji ta osso">
                <img src="assets/images/e-nois.svg" alt="emoji é nois">
                <img src="assets/images/deu-ruim.svg" alt="emoji deu ruim">
                <img src="assets/images/deu-bom.svg" alt="emoji deu bom">
                <img src="assets/images/igrejinha.svg" alt="emoji igrejinha">
            </div>
        </section>
    </div>
    <p>Vale a Penha 2023. Alguns direitos reservados &copy;</p>
</footer>
<script src="assets/js/menu-novo.js"></script>


<?php
switch ($pagina) {


    case "voce-em-foco.php":

    ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="assets/js/contato.js"></script>
    <?php


    case "cadastro.php":
    ?>
        <script src="assets/js/mascara-cpf-tel.js"></script>
        <script src="assets/js/validacao.js"></script>
<?php
        break;
    
}

?>
</body>
</html>