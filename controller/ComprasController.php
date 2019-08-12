<?php

require_once("models/Viagem.php");
require_once("models/Cliente.php");

if ($_POST) {

  $origem = $_POST['origem'];
  $destino = $_POST['destino'];
  $data_ida = $_POST['data_ida'];
  $data_volta = $_POST['data_volta'];
  $classe = $_POST['classe'];
  $adultos = $_POST['adultos'];
  $criancas = $_POST['criancas'];
  $preco = "1.500,35";

  $nome = $_POST['nome'];
  $cpf_cnpj = $_POST['cpf_cnpj'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $cep = $_POST['cep'];
  $endereco = $_POST['endereco'];
  $bairro = $_POST['bairro'];
  $numero = $_POST['numero'];
  $cidade = $_POST['cidade'];
  $uf = $_POST['uf'];

  try {

    $cliente = new Cliente(
      $nome,
      $cpf_cnpj,
      $telefone,
      $email,
      $cep,
      $endereco,
      $bairro,
      $numero,
      $cidade,
      $uf
    );

    $viagem = new Viagem(
      $origem,
      $destino,
      $data_ida,
      $data_volta,
      $classe,
      $adultos,
      $criancas,
      $preco
    );
  } catch (Exception $error) {
    echo "<script>alert('" . $error->getMessage() . "')</script>";
    echo "<script>history.back()</script>";
  }
}
