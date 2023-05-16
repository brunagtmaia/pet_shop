<?php
include_once'conexao.php';

if (isset($_POST['entrar'])){//define se é nula ou não 
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  if (!empty($_POST['email']) && !empty($_POST['senha'])) {
    // Os campos não estão vazios, faça algo aqui
    // Execute uma consulta para verificar se o nome de usuário e a senha correspondem a um usuário válido
    $query_verifica_email = "SELECT * FROM login WHERE email='$email'";
    $result = mysqli_query($conn, $query_verifica_email);

      // Verifique se a consulta retornou um resultado, se for verdadeiro o usuário existe 
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      if($row['senha']=== $senha){
          if($row['email'] === "brunagmaia05@gmail.com"){
              ?>
              <script>alert("Conta de administrador. Direcionando...");</script>
              <?php
              header("Location: index2.php?id=". $row['id']);
              exit();
          }else{
              ?>
              <script>alert("Conta de usuário. Direcionando...");</script>
              <?php
              header("Location: index2.php?id=". $row['id']);
              exit();
          }
      }else{
          ?>
              <script>alert("Senha ou usuário errado");</script>
          <?php
      }
    } else {
        ?>
            <script>alert("Usário não cadastrado. click em cadastrar");</script>
        <?php
    }
  }else {
    // Campos vazios 
    ?>
    <script>alert("Todos os campos são obrigatórios")</script>
    <?php
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Here</title>
    <link rel="stylesheet" href="style\style_login.css" />
    <!-- Não percebi diferença, porem acho que está importando a fonte-->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="inFormBackground">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="inLoginForm">
        <form method="post" action="">
          <div class="title">
            <h3>Login</h3>
          </div>
          <div class="inputGroup">
            <label for="email">Email</label>
            <input type="email" placeholder="Enter Email" id="email" name="email" required/>
          </div>
          <div class="inputGroup">
            <label for="password">Senha</label>
            <input type="password" placeholder="Enter Password" id="password" name="senha" required/>
          </div>
          <button class="submitForm" name="entrar">Entrar</button>
          <div class="link_cadastre">
                <a href="cadastro.php">Não tem conta? Cadastre-se!</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>