<?php

class ValidadorCPF
{

  public function ehValido($cpf)
  {

    if (!ValidadorCPF::ehCpf($cpf)) return false;

    $cpf_numeros = ValidadorCPF::removeFormatacao($cpf);

    if (!ValidadorCPF::verificarNumerosIguais($cpf_numeros)) return false;

    if (!ValidadorCPF::validarDigitos($cpf_numeros)) return false;

    return true;
  }

  private function ehCpf($cpf)
  {
    //123.456.789-10
    $regex_cpf = "/[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/";
    return preg_match($regex_cpf, $cpf);
  }

  private function removeFormatacao($cpf)
  {
    $somente_numeros = str_replace([".", "-"], "", $cpf);
    return $somente_numeros;
  }

  private function verificarNumerosIguais($cpf)
  {

    for ($i = 0; $i <= 11; $i++) {
      if (str_repeat($i, 11) == $cpf) return false;
    }

    return true;
  }

  private function validarDigitos($cpf)
  {

    //123.456.789-10
    $primeiro_digito = 0;
    $segundo_digito = 0;

    for ($i = 0, $peso = 10; $i <= 8; $i++, $peso--) {
      $primeiro_digito += $cpf[$i] * $peso;
    }

    for ($i = 0, $peso = 11; $i <= 9; $i++, $peso--) {
      $segundo_digito += $cpf[$i] * $peso;
    }

    $calculo_um = (($primeiro_digito % 11) < 2) ? 0 : 11 - ($primeiro_digito % 11);
    $calculo_dois = (($segundo_digito % 11) < 2) ? 0 : 11 - ($segundo_digito % 11);

    if ($calculo_um <> $cpf[9] || $calculo_dois <> $cpf[10]) return false;

    return true;
  }
}
