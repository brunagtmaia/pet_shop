<?php
include_once'conexao.php';

$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);//recebe todos os dados de uma vez

//faz com que só funcione se clicar em enviar(entrar)
if (isset($_POST['cadastrar'])){
    $email = $_POST['email'];//armazena o valor do campo usuario e senha 
    $senha = $_POST['senha'];

    //cria a variável que verifica se realmente não está cadastrado
    $query_verifica_email = "SELECT * FROM login WHERE email = '$email'";
    $resultado_verifica_email = mysqli_query($conn, $query_verifica_email);

    if (empty($email) || empty($senha)) {
        //rompe a conexão script e saí do programa 
        ?>
        <script>alert("Todos os campos são obrigatórios");</script>
        <?php
    }else{
        if (mysqli_num_rows($resultado_verifica_email) > 0) {
            ?>
                <script>alert("Usuário já cadastrado, volte e faça login");</script>
            <?php
        }else{
            $query_insere_usuario = "INSERT INTO login (email, senha) VALUES ('$email', '$senha')"; //variável de comando sql 
            $resultado_insere_usuario = mysqli_query($conn, $query_insere_usuario);
            ?>
            <script>alert("Usuário cadastrado com sucesso. Direcionando para a página inicial do site.");</script>
            <?php
            header("Location: login.php"); 
            exit();
        }
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
    <link rel="stylesheet" href="style/style_cadastro.css" />
    <!-- Não percebi diferença, porem acho que está importando a fonte-->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="tudo">
        <div class="inFormBackground">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="inLoginForm">
            <form method="post" action="">
            <!-- nome -->
            <div class="inputGroup">
                <label for="nome">Nome</label>
                <input type="text" placeholder="" id="none" name="nome" required/>
            </div>
            <!-- Email -->
            <div class="inputGroup">
                <label for="email">Email</label>
                <input type="email" placeholder="" id="email" name="email" required/>
            </div>
            <!-- Telefone -->
            <div class="inputGroup">
                <label for="telefone">Telefone</label>
                <input type="tel" placeholder="" id="telefone" name="telefone" onkeypress="$(this).mask('(00) 0000-0000')"/>
            </div>
            <!-- cep -->
            <div class="inputGroup">
                <label for="cep">CEP</label>
                <input type="number" placeholder="" id="cep" name="cep" pattern="\d{5}-\d{3}"/>
            </div>
            <!-- rua -->
            <div class="inputGroup">
                <label for="rua">Rua</label>
                <input type="text" placeholder="" id="email" name="rua"/>
            </div>
            <!-- bairro -->
            <div class="inputGroup">
                <label for="bairro">Bairro</label>
                <input type="text" placeholder="" id="email" name="bairro"/>
            </div>
            <!-- numero -->
            <div class="inputGroup">
                <label for="numero">Número</label>
                <input type="number" placeholder="" id="email" name="numero"/>
            </div>
            <!-- senha -->
            <div class="inputGroup">
                <label for="password">Senha</label>
                <input type="password" placeholder="" id="password" name="senha" required/>
            </div>
                <div class="bt_cadastro" style="display:flex; flex-direction: column;">
                        <button class="submitForm" name="cadastrar">Cadastrar</button>
                        <div class="link_cadastre">
                            <a href="login.php">Já tem conta? faça login!</a>
                        </div>
                </div>
            </form>
        </div>
        </div>
    </div>
  </body>
</html>