<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <title>CADASTRO DE CLIENTE</title>
</head>
<body>

<?php 

  $nome = $_POST["nome"];
  $rg = $_POST["rg"];
  $cpf = $_POST["cpf"];
  $telefone = $_POST["telefone"];
  $endereco = $_POST["endereco"];


  $placa = $_POST["placa"];
  $renavan = $_POST["renavan"];
  $fabricante = $_POST["fabricante"];
  $modelo = $_POST["modelo"];
  $ano = $_POST["ano"];

  $ocorrencia = $_POST["ocorrencia"];
  $data = $_POST["data"];
  $local = $_POST["local"];
  $descricao = $_POST["descricao"];


  echo "<table class='table'>
    <thead class='thead-dark'>
      <tr>
        <th scope='col'>NOME</th>
        <th scope='col'>RG</th>
        <th scope='col'>CPF</th>
        <th scope='col'>TELEFONE</th>
        <th scope='col'>ENDEREÇO</th>
      </tr>
    </thead>
    <tbody>";

  echo "
  <tr>
    <td>$nome</td>
    <td>$rg</td>
    <td>$cpf</td>
    <td>$telefone</td>
    <th>$endereco</td>
  </tr>";

  echo "<table class='table'>
    <thead class='thead-dark'>
      <tr>
        <th scope='col'>PLACA</th>
        <th scope='col'>RENAVAN</th>
        <th scope='col'>FABRICANTE</th>
        <th scope='col'>MODELO</th>
        <th scope='col'>ANO</th>
      </tr>
    </thead>
    <tbody>";

  echo "
  <tr>
    <td>$placa</td>
    <td>$renavan</td>
    <td>$fabricante</td>
    <th>$modelo</td>
    <td>$ano</td>
  </tr>";

  echo "<table class='table'>
    <thead class='thead-dark'>
      <tr>
        <th scope='col'>OCORRÊNCIA</th>
        <th scope='col'>DATA</th>
        <th scope='col'>LOCAL</th>
        <th scope='col'>DESCRIÇÃO</th>
      </tr>
    </thead>
    <tbody>";

  echo "
  <tr>
    <td>$ocorrencia</td>
    <td>$data</td>
    <td>$local</td>
    <th>$descricao</td>
  </tr>";

  echo "
    </tbody>
  </table>";





  $con = mysqli_connect("localhost", "root", "");
    mysqli_set_charset($con, "utf8");
    mysqli_select_db($con, "DB_AUTOMOVEIS") or
      die(
        "Erro na abertura do banco de dados:<br>" .
        mysqli_error($con)
    );
  

  $sql = "INSERT INTO TBL_CLIENTE (
    NOME, 
    RG, 
    CPF, 
    TELEFONE, 
    ENDERECO
  ) VALUES (
    '$nome',
    '$rg',
    '$cpf',
    '$telefone',
    '$endereco'
  )";

  mysqli_query($con, $sql) or die("Erro na inserção do Cadastro:" . mysqli_error($con) );



  $sql1 = "INSERT INTO TBL_AUTOMOVEL (
    PLACA, 
    COD_RENAVAN, 
    FABRICANTE, 
    MODELO, 
    ANO
  ) VALUES (
    '$placa',
    '$renavan',
    '$fabricante',
    '$modelo',
    '$ano'
  )";
  mysqli_query($con, $sql1) or die("Erro na inserção do Cadastro 1:" . mysqli_error($con) );


  $sql2 = "INSERT INTO TBL_OCORRENCIA (
    NUM_OCORRENCIA, 
    DATA_OCORRENCIA, 
    LOCAL_OCO, 
    DESCRICAO
  ) VALUES (
    '$ocorrencia',
    '$data',
    '$local',
    '$descricao'
  )";
  mysqli_query($con, $sql2) or die("Erro na inserção do Cadastro 2:" . mysqli_error($con) );

  
?>

  <div class="card">
    <h5 class="card-header">Cliente cadastrado com sucesso!</h5>
    <div class="card-body">
      <p class="card-text">Clique abaixo para realizar um novo cadastro:</p>
      <a href="formulario.html" class="btn btn-outline-dark">Cadastrar</a>
    </div>
  </div><br>
  

  
</body>
</html>