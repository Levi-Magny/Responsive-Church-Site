<?php include_once('header.php') ?>

<section>
<div id="contact" class="container">
    <h2>Informações de contato<span><hr></span></h2>
    <div class="row">
        <div id="contactInfo" class="col-sm-6">
            <address>
                <i class="fas fa-map-marker-alt"></i> <span>Av. Ceará, 216. Bairro das Flores. CEP: 69385-000 - Tucumã PA</span>
            </address>
            <div><i class="far fa-envelope"></i> <label>contato@ibmtucuma.com</label></div>
        </div>
        <div id="formContato" class="col-sm-6">
            <form action="inc/contact-sender.php" method="post" target="_blank">
                <label>Nome:</label><br>
                <input type="text" name="nome" placeholder="Seu Nome:" required><br><br>
                <label>Email:</label><br>
                <input type="email" name="email" placeholder="Seu e-mail:" required><br><br>
                <label>Assunto:</label><br>
                <textarea name="mensagem" placeholder="Escreva aqui sua mensagem:" required></textarea><br><br>

                <input id="but" type="submit" value="Enviar">
            </form>
        </div>
    </div>
    
</div>
    
</section>

<?php include_once('footer.php') ?>