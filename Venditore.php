<?php
  // Richiamo Articolo
  include_once __DIR__ . '/Articolo.php';

  // Classe Venditore
  class Venditore extends Articolo{

    // Proprietà
    public $azienda;
    public $referente;
    public $prezzo_acq;
    public $margine;
    
    // Costruttore
    public function __construct($_azienda, $_referente, $_prezzo_acq){
      $this->azienda = $_azienda;
      $this->referente = $_referente;
      $this->prezzo_acq = $_prezzo_acq;
    }

    // Calcolo Margine guadagno ottenuto da prezzo di vendita - prezzo di acquisto
    public function calcMargine($venditore, $articolo){
      return $articolo->prezzo_unitario - $venditore->prezzo_acq;
    }

    // Funzione che mostra i dettagli dell fornitore
    public function showFornitore(){
      echo "
        <ul class=\"list-group\">
          <li class=\"list-group-item\"> 
            <strong>Azienda: </strong> $this->azienda
          </li>
          <li class=\"list-group-item\"> 
            <strong>Referente: </strong> $this->referente
          </li>
          <li class=\"list-group-item\"> 
            <strong>Articolo: </strong> $this->nome_articolo
          </li>
          <li class=\"list-group-item\"> 
            <strong>Prezzo Vendita: </strong> $this->prezzo_unitario €
          </li>
          <li class=\"list-group-item\"> 
            <strong>Prezzo Acquisto: </strong> $this->prezzo_acq €
          </li>
          <li class=\"list-group-item\"> 
            <strong>Margine: </strong> $this->margine €
          </li>
          <li class=\"list-group-item text-center\"> 
            <a href=\"index.php\" class=\"btn btn-success\">Home</a>
          </li>
        </ul>
      ";
    }
  }

  // Ottengo id prodotto cliccato
  $id = $_GET['id'];

  // Check Articolo
  if ($id == 1){
    $vendor1 = new Venditore('Crucial','Paolo Duzioni','40');

    $vendor1->prezzo_unitario = $product1->prezzo_unitario;
    $vendor1->descrizione = $product1->descrizione;
    $vendor1->nome_articolo = $product1->nome_articolo;
    $vendor1->margine = $vendor1->calcMargine($vendor1, $product1);

    $vendor1->showFornitore();

  } else if ($id == 2){
    $vendor2 = new Venditore('Intel','Lorenzo Balsano','80');

    $vendor2->prezzo_unitario = $product2->prezzo_unitario;
    $vendor2->descrizione = $product2->descrizione;
    $vendor2->nome_articolo = $product2->nome_articolo;
    $vendor2->margine = $vendor2->calcMargine($vendor2, $product2);

    $vendor2->showFornitore();

  } else {
      die("
      <h1 class=\"text-center\">NON E' STATO TROVATO UN VENDITORE PER L'ARTICOLO SELEZIONATO </h1>
      ");
  }
  



