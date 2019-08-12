
<?php

class Viagem
{

  var $origem;
  var $destino;
  var $data_ida;
  var $data_volta;
  var $classe;
  var $adultos;
  var $criancas;
  var $preco;

  function __construct(
    $origem,
    $destino,
    $data_ida,
    $data_volta,
    $classe,
    $adultos,
    $criancas,
    $preco

  ) {
    $this->origem = $origem;
    $this->destino = $destino;
    $this->data_ida = $data_ida;
    $this->data_volta = $data_volta;
    $this->classe = $classe;
    $this->adultos = $adultos;
    $this->criancas = $criancas;
    $this->preco = $preco;
  }
}
