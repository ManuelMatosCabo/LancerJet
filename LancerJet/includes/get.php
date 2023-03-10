<?php 

      // Ligar à base de dados
      $servername = "localhost";
      $username = "web";
      $password = "web";
      $dbname = "projetofinal";

      // Criar conexão
      $conexao = mysqli_connect($servername, $username, $password, $dbname);  
     
     if(!empty($_GET['search'])){
       $data = $_GET['search'];
       $sql = "SELECT nome_completo, nome_projeto, tipo, linguagem, descricao, contacto, orcamento FROM anuncios WHERE nome_completo LIKE '%$data%' OR nome_projeto LIKE '%$data%' OR tipo LIKE '%$data%' OR linguagem LIKE '%$data%' OR descricao LIKE '%$data%' OR contacto LIKE '%$data%' OR orcamento LIKE '%$data%' ORDER BY id DESC";
       $dados = mysqli_query($conexao, $sql);
     }else{
        $sql = "SELECT * FROM anuncios ORDER BY id DESC";
        $dados = mysqli_query($conexao, $sql);
     }
?>