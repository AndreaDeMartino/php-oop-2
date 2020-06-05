<?php
  // Classe Articolo
  class Articolo {

    // Proprietà
    public $nome_articolo;
    public $descrizione;
    public $prezzo_unitario;
    public $quantita;
    public $disponibile;
    public $costo_tot;

    // Costruttore
    public function __construct($_nome_articolo, $_descrizione, $_prezzo_unitario, $_quantita){
      $this->nome_articolo = $_nome_articolo;
      $this->descrizione = $_descrizione;
      $this->prezzo_unitario = $_prezzo_unitario;
      $this->quantita = $_quantita;
      $this->disponibile = $this->checkArticolo();
      $this->costo_tot = $this->costoTot();
    }

    // Funzione che calcola il costo totale per articolo
    private function costoTot(){
      if ($this->disponibile == 'Disponibile'){
        return $this->prezzo_unitario * $this->quantita;
      } else{
        return 'Prezzo totale non disponibile';
      }
    }

    // Funzione che verifica la disponibilità
    private function checkArticolo(){
      if ($this->quantita > 0){
        return 'Disponibile';
      } else{
        return 'Articolo Non Disponibile';
      }
    }

    // Funzione che mostra i dettagli dell'articolo
    public function showArticolo($id){
      echo "
        <ul class=\"list-group\">
          <li class=\"list-group-item\"> 
            <strong>Nome Articolo: </strong> $this->nome_articolo
          </li>
          <li class=\"list-group-item\"> 
            <strong>Descrizione: </strong> $this->descrizione
          </li>
          <li class=\"list-group-item\"> 
            <strong>Prezzo di Vendita Unitario: </strong> $this->prezzo_unitario €
          </li>
          <li class=\"list-group-item\"> 
            <strong>Quantita: </strong> $this->quantita
          </li>
          <li class=\"list-group-item\"> 
            <strong>Stato: </strong> $this->disponibile
          </li>
          <li class=\"list-group-item\"> 
            <strong>Costo Totale: </strong> $this->costo_tot €
          </li>
          <li class=\"list-group-item\"> 
          <a href=\"show.php?id=$id\" class=\"btn btn-primary\">Informazioni Venditore</a>
          </li>
        </ul>
      ";
    }
  }

  // Dichirazione ed utilizzo Istanze Oggetti
  $product1 = new Articolo('Memoria Ram', '16GB', 60, 9);
  $product2 = new Articolo('Processore', '2.7GHZ', 120, 0);