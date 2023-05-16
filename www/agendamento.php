<?php
include_once'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' OR $_SERVER['REQUEST_METHOD'] === 'POST') {
    //pegando o id do usuário 
    $id_usuario_atual = $_GET['id'];
}else{
    ?>
    <script>alert("Faça login");</script>
    <?php
    header('Location: login.php');
    exit();
}
// pesquisa de usuário atual
$sql_pesquisa_usuario = "SELECT * FROM login WHERE id= '$id_usuario_atual'";
$result_pesquisa_usuario = mysqli_query($conn, $sql_pesquisa_usuario);
$row_pesquisa_usuario = mysqli_fetch_assoc($result_pesquisa_usuario);

$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);//recebe todos os dados de uma vez

//faz com que só funcione se clicar em enviar(agendar)
if (isset($_POST['agendar'])){
    $nome_pet = $_POST['nome_pet'];//armazena o valor do campo usuario e senha 
    $tipo_pet = $_POST['tipo_pet'];
    $raca = $_POST['raca_pet'];
    $sexo = $_POST['sexo_pet'];
    $peso = $_POST['peso_pet'];
    $data = $_POST['dataHora'];
    $tipo_servico = $_POST['serviso'];

    //cria a variável que verifica se realmente não está cadastrado
    $query_verifica_dataHora = "SELECT * FROM consultas WHERE data = '$data'";
    $resultado_verifica_email = mysqli_query($conn, $query_verifica_dataHora);

    if (empty($nome_pet) || empty($tipo_pet) || empty($raca) || empty($sexo) || empty($peso)|| empty($data) || empty($tipo_servico)) {
        //rompe a conexão script e saí do programa 
        ?>
        <script>alert("Todos os campos são obrigatórios");</script>
        <?php
    }else{
        if (mysqli_num_rows($resultado_verifica_email) > 0) {
            ?>
                <script>alert("Horário já acupado, mude o horário");</script>
            <?php
        }else{
            $query_insere_usuario = "INSERT INTO consultas (nome_pet, tipo_pet, raca,sexo,peso,data,tipo_servico) VALUES ('$nome_pet', '$tipo_pet', '$raca', '$sexo', '$peso', '$data', '$tipo_servico')"; //variável de comando sql 
            $resultado_insere_usuario = mysqli_query($conn, $query_insere_usuario);
            ?>
            <script>alert("Horário marcado com sucesso!");</script>
            <?php
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
    <link rel="stylesheet" href="style\style_agendamento.css" />
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
                <h1 class="titulo1">AGENDE O SEU HORÁRIO:</h1>

                <div class="inputGroup">
                    <label for="nome_pet">Nome do pet:</label>
                    <input type="text" id="nome_pet" name="nome_pet" required/>
                </div>

                <div class="inputGroup">
                    <label for="tipo_pet">Tipo de pet:</label>
                    <select name="tipo_pet">
                        <option>Gato</option>
                        <option>Cachorro</option>
                        <option>Papaguaio</option>
                    </select>
                </div>

                <div class="inputGroup">
                    <label for="sexo_pet">Sexo:</label>
                    <select name="sexo_pet">
                        <option>Fêmea</option>
                        <option>Macho</option>
                    </select>
                </div>

                <div class="inputGroup">
                    <label for="peso_pet">Peso:</label>
                    <input type="numbre" id="peso_pet" name="peso_pet" min="0" max="100" value="5">
                </div>

                <div class="inputGroup">
                    <label for="raca_pet">Raça:</label>
                    <input type="text" id="raca_pet" name="raca_pet" min="0" max="100" value="5">
                </div>

                <div class="inputGroup">
                    <label for="dataHora">Data e hora:</label>
                    <input type="datetime-local" id="dataHora" name="dataHora">
                </div>

                <div class="inputGroup">
                    <label for="serviso">Tipo de serviço:</label>
                    <select name="serviso">
                        <option>Banho</option>
                        <option>Tosa</option>
                        <option>Transporte</option>
                        <option>Plano - Banho porte pequeno</option>
                        <option>Plano - Tosa na máquina</option>
                        <option>Plano - tosa na tesoura</option>
                    </select>
                </div>

                <div class="inputGroup">
                    <label for="dono_pet">Mãe / Pai do pet:</label>
                    <input type="text" id="dono_pet" name="dono_pet" value="<?php echo $row_pesquisa_usuario['nome']; ?>">
                </div><br><br>


                <div class="inputGroup">
                    <button class="submitForm" name="agendar">Agendar</button>
                </div>
                
            </form>
        </div> 
    </div>
  </body>
</html>