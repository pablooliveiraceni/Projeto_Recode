
<?php 
$servername = "localhost";
$username   = "root";
$password   = "senha*-*";
$database   = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("A conexão ao BD falhou" . mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['msg'])){

    $nome  = $_POST['nome'];
    $msg   = $_POST['msg'];

    $sql = "insert into comentarios (nome,  msg) values ('$nome', '$msg')";

    $result = $conn->query($sql);
 
} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
    <!-- íncio Menu -->
    <?php
     include('menu.html');
    ?>
    <!-- Fim Menu -->

    <header>
        <h2>Contato</h2>
    </header>
    <hr>
    <main>
        <section class="contatos">
            <div class="contatos">
                <img class="imgContatoEmail" src="img/email.png" alt="E-mail">
                <label class="textContatoEmail">contato@fullstackeletro.com</label>
                <br>
                <img class="imgContatoWhats" src="img/telefoneWhatsapp.png" alt="Whatsapp">
                <label class="textContatoWhats">(11) 99999-9999</label>
            </div>
        </section>  
        <section class="formulario">
            <form action="" method="post" >
                <input type="text" name="nome" id="nome" placeholder="Nome" size="50" maxlength="40"> <br> <br>
                <textarea name="msg" id="" cols="50" rows="10" placeholder="Escreva aqui sua mensagem"></textarea>  <br>
                <input class="enviar" type="submit" value="Enviar">
            </form>
        </section>
    </main>
    <?php
    
    $sql ="select * from comentarios";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($rows = $result->fetch_assoc()){    
            echo "Data: ", $rows['data'], "<br/>";    
            echo "Nome: ", $rows['nome'], "<br/>";  
            echo "Mensagem: ", $rows['msg'], "<br/>";  
            echo "<hr/>";

    }
    }else {
        echo "Nenhum comentário foi digitado";
    }

     ?>
    <footer id="rodape">
        <p id="formas_pagamento">Formas de pagamento</p>
        <img src="img/formasPagamento.png" alt="Formas de Pagamento">
        <p>&copy; Recode Pro</p>
     </footer> 
     
</body>
</html>