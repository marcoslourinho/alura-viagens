<?php
require_once "ValidadorCPF.php";
require_once "ValidadorCNPJ.php";
class Cliente
{

  var $nome;
  var $cpf_cnpj;
  var $telefone;
  var $email;
  var $cep;
  var $endereco;
  var $bairro;
  var $numero;
  var $cidade;
  var $uf;

  function __construct(
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
  ) {

    $validadorCPF = new ValidadorCPF();
    $validadorCNPJ = new ValidadorCNPJ();

    //validação
    if (!$this->cepValido($cep)) throw new Exception("CEP no formato inválido");
    if (!$this->telefoneValido($telefone)) throw new Exception("Telefone no formato inválido");
    if (!$this->emailValido($email)) throw new Exception("Email no formato inválido");

    if (strlen($cpf_cnpj) > 14) {
      if (!$validadorCNPJ->ehValido($cpf_cnpj)) throw new Exception("CNPJ inválido");
    } else {
      if (!$validadorCPF->ehValido($cpf_cnpj)) throw new Exception("CPF Inválido");
    }

    $this->nome = $nome;
    $this->cpf_cnpj = $this->removeFormatacao($cpf_cnpj);
    $this->telefone = $this->removeFormatacao($telefone);
    $this->email = $email;
    $this->cep = $this->removeFormatacao($cep);
    $this->endereco = $endereco;
    $this->bairro = $bairro;
    $this->numero = $numero;
    $this->cidade = $cidade;
    $this->uf = $uf;
  }

  function cepValido($cep)
  {
    if (strlen($cep) == 10) {
      //22.333-333
      $regex_cep = "/[0-9]{2}\.[0-9]{3}\-[0-9]{3}/";
      return preg_match($regex_cep, $cep);
    } else {
      return false;
    }
  }

  function telefoneValido($telefone)
  {
    if (strlen($telefone) == 15) {
      //(99) 99999-9999
      $regex_telefone = "/\([0-9]{2}\)[0-9]{5}\-[0-9]{4}/";
      return preg_match($regex_telefone, str_replace(" ", "", $telefone));
    } else {
      return false;
    }
  }

  function emailValido($email)
  {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }

  function removeFormatacao($info)
  {
    $dado = str_replace([".", "-", "/", "(", ")", " "], "", $info);
    return $dado;
  }
}
