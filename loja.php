<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas lojas - Full Stack Eletro</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
    <!-- íncio Menu -->
    <?php
     include('menu.html');
    ?>
    <!-- Fim Menu -->
    <!-- Fim Menu -->
    <main>
            <header>
                <h2>Nossas Lojas</h2>
            </header>
        <hr>
        <section>
            <div class="cidade">
                <ul>
                    <li><h3>Rio de Janeiro</h3></li>
                    <li><p>Avenida Presidente Vargas, 5000</p></li>
                    <li><p>10 &ordm; andar</p></li>
                    <li><p>Centro</p></li>
                    <li><p>(21) 3333-3333</p></li>
                </ul>
            </div>
            <div class="cidade">

                <ul>
                    <li><h3>São Paulo</h3></li>
                    <li><p>Avenidade Paulista, 985</p></li>
                    <li><p>3 &ordm; andar</p></li>
                    <li><p>Jardins</p></li>
                    <p>(11) 4444-4444</p>
                </ul>
            </div>
            <div class="cidade">
                <ul>
                    <li><h3>Santa Catarina</h3></li>
                    <li><p>Rua Major &Aacute; vila, 370</p></li>
                    <li><p>Vila Mariana</p></li>
                    <p>(47) 5555-5555</p>
                </ul>
            </div>
        </section>
    </main>
    <br><br><br><br><br>
    <footer id="rodape">
        <p id="formas_pagamento">Formas de pagamento</p>
        <img src="img/formasPagamento.png" alt="Formas de Pagamento">
     </footer>
</body>
</html>