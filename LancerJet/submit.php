<?php
  if(!isset($_POST['nome_completo']) || !isset($_POST['linguagem']) || !isset($_POST['tipo'])){
    die();
  }else{

    // Ligar à base de dados
    $servername = "localhost";
    $username = "web";
    $password = "web";
    $dbname = "projetofinal";

    // Criar conexão
    $conexao = mysqli_connect($servername, $username, $password, $dbname);  

    // Ler dados do formulário
    $nome_completo = $_POST['nome_completo'];
    $nome_projeto = $_POST['nome_projeto'];
    $tipo = $_POST['tipo']; 
    $linguagens = $_POST['linguagem'];
    $descricao = $_POST['descricao'];
    $contacto = $_POST['contacto'];
    $orcamento = $_POST['orcamento'];

    $linguagem = "";

    foreach ($linguagens as $value) {
        $linguagem .= $value . "; ";
    }

    // Inserir dados na base de dados
      $sql = "INSERT INTO anuncios (nome_completo, nome_projeto, tipo, linguagem, descricao, contacto, orcamento) VALUES ('$nome_completo', '$nome_projeto', '$tipo', '$linguagem', '$descricao', '$contacto', '$orcamento')";
      $result = mysqli_query($conexao, $sql);
      if($result){
          echo "Dados inseridos com sucesso";
      } else {
          echo "Erro ao inserir dados: " . mysqli_error($conn);
      }

    mysqli_close($conexao);

    header("Location:publicaçoes.php");

  }
?>
