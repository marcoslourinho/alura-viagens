<?php

class ValidadorCNPJ
{

  public function ehValido($cnpj)
  {

    if (!ValidadorCNPJ::ehCNPJ($cnpj)) return false;

    $cnpj_numeros = ValidadorCNPJ::removeFormatacao($cnpj);

    if (!ValidadorCNPJ::verificarNumerosIguais($cnpj_numeros)) return false;

    if (!ValidadorCNPJ::validarDigitos($cnpj_numeros)) return false;

    return true;
  }

  private function ehCNPJ($cnpj)
  {
    //12.345.678/0001-94
    $regex_cnpj = "/[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}/";
    return preg_match($regex_cnpj, $cnpj);
  }

  private function removeFormatacao($cnpj)
  {
    $somente_numeros = str_replace([".", "/", "-"], "", $cnpj);
    return $somente_numeros;
  }

  private function verificarNumerosIguais($cnpj)
  {
    for ($i = 0; $i <= 14; $i++) {
      if (str_repeat($i, 14) == $cnpj) return false;
    }
    return true;
  }

  private function validarDigitos($cnpj)
  {

    $primeiro_digito = 0;
    $segundo_digito = 0;

    for ($i = 0, $peso = 5; $i <= 11; $i++, $peso--) {
      $peso = ($peso < 2) ? 9 : $peso;
      $primeiro_digito += $cnpj[$i] * $peso;
    }

    for ($i = 0, $peso = 6; $i <= 12; $i++, $peso--) {
      $peso = ($peso < 2) ? 9 : $peso;
      $segundo_digito += $cnpj[$i] * $peso;
    }

    $calculo_um = (($primeiro_digito % 11) < 2) ? 0 : (11 - ($primeiro_digito % 11));
    $calculo_dois = (($segundo_digito % 11) < 2) ? 0 : (11 - ($segundo_digito % 11));

    if ($calculo_um <> $cnpj[12] || $calculo_dois <> $cnpj[13]) {
      return false;
    } else {
      return true;
    }
  }
}
