
<?php 
$servername = "localhost";
$username   = "root";
$password   = "yuyuhakusho";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <!-- íncio Menu -->
    <?php
     include('menu.html');
    ?>
    <!-- Fim Menu -->
    <main>
        <div container-fluid>
            <header>
                <h2>Contato</h2>
            </header>
            <hr>
        
            <section class="contatos">
                <div class="contatos">
                    <img class="imgContatoEmail" src="img/email.png" alt="E-mail">
                    <label class="textContatoEmail">contato@fullstackeletro.com</label>
                    <br>
                    <img class="imgContatoWhats" src="img/telefoneWhatsapp.png" alt="Whatsapp">
                    <label class="textContatoWhats">(11) 99999-9999</label>
                </div>
            </section>  
            <section class="formulario bg-light">
                
                <form action="" method="post">
                <div  class="form-group">
                   <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" size="50" maxlength="40"> <br> <br>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label> <br>
                    <textarea name="msg" id="" cols="50" rows="10" placeholder="Escreva aqui sua mensagem"></textarea>  <br>
                </div>
                <button class="btn btn-danger btn" id="Enviar" type="submit" value="Enviar">Enviar</button>
                </form>
            </section>

        </div>
        
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
    </main>
    <footer id="rodape">
        <p id="formas_pagamento">Formas de pagamento</p>
        <img src="img/formasPagamento.png" alt="Formas de Pagamento">
        <p>&copy; Recode Pro</p>
     </footer> 
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>