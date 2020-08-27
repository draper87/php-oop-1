<?php

  // classe figlia di User riservata ai dipendenti
  class Employee extends User  {

    protected $livello_anzianita;

    // funzione che setta un livello di anzianità espresso in valore numerico
    public function setLivelloAnzianita($_livello) {
      $this->livello_anzianita = $_livello;
    }

    // modifico la funzione per aggiungere il livello di anzianità
    public function stampaUtente() {
      return [
        'nome' => $this->nome,
        'cognome' => $this->cognome,
        'email' => $this->email,
        'data' => $this->data_iscrizione,
        'commenti' => $this->commenti,
        'livello' => $this->livello_anzianita
      ];

    }

  }





 ?>
