<?php 
$servername = "localhost";
$username   = "root";
$password   = "senha*-*";
$database   = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("A conexão ao BD falhou" . mysqli_connect_error());
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
    <script src="js/funcoes.js"></script>
</head>
<body>
     <!-- íncio Menu -->
     <?php
     include('menu.html');
    ?>
    <!-- Fim Menu -->

    <main>
        <header>
            <h2>Produtos</h2>
        </header>
        <hr>
            <!-- Categorias-->

          <section class="categorias"> 
              <aside>
                <h3>Categorias</h3>
                    <ul style="list-style: none;">
                    <li onclick="exibir_todos()" onmouseover="aumentarMenu(this)" onmouseout="diminuirMenu(this)">Todos (12)</li>
                    <li onclick="exibir_categoria('geladeira')" onmouseover="aumentarMenu(this)" onmouseout="diminuirMenu(this)">Geladeira (3)</li>
                    <li onclick="exibir_categoria('fogao')" onmouseover="aumentarMenu(this)" onmouseout="diminuirMenu(this)">Fogões (2)</li>
                    <li onclick="exibir_categoria('microondas')" onmouseover="aumentarMenu(this)" onmouseout="diminuirMenu(this)">Microondas (3)</li>                     
                    <li onclick="exibir_categoria('lavadouraderoupas')" onmouseover="aumentarMenu(this)" onmouseout="diminuirMenu(this)">Lavadoura de roupas (2)</li>                     
                    <li onclick="exibir_categoria('lavaloucas')" onmouseover="aumentarMenu(this)" onmouseout="diminuirMenu(this)">Lava louças (2)</li>                     
                   </ul>
              </aside>               
            </section> 
             <!-- Produtos-->   

             
            <?php
              $sql = "select * from produtos";

              $result = $conn->query($sql);
              
              
              if($result->num_rows > 0){
                  while($rows = $result->fetch_assoc()){
             ?>

                <div class="box_produto" id="<?php echo $rows["categoria"];?>" >
                    <img src="<?php echo $rows["imagem"];?>" width="40%" onmouseover="aumentar(this)" onmouseout="diminuir(this)"> 
                    <br>
                    <p class="descricao"><?php echo $rows["descricao"];?></p>
                    <hr>
                    <p class="descricao"><strike><?php echo $rows["preco"];?></strike></p>
                    <p class="preco"><?php echo $rows["preco_final"];?></p>
                </div>
             <?php
                  }
              
              }else{
                  echo "Nenhum produto cadastrado";
              }
            
            ?>        
            
    </main>
    <footer id="rodape">
        <p id="formas_pagamento">Formas de pagamento</p>
            <img width="300" height="100" src="img/formasPagamento.png" alt="Formas de Pagamento">
        <p>&copy; Recode Pro</p>
    </footer>

</body>
</html>