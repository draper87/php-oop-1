<?php

// creo classe User
class User {
  public $nome;
  public $cognome;
  public $email;
  public $data_iscrizione;
  public $commenti;

  // creo funzione per gli attributi da passare all istanza nel momento in cui viene creata
  public function __construct($_nome, $_cognome, $_email, $_data_iscrizione, $_commenti) {
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->email = $_email;
    $this->data_iscrizione = $_data_iscrizione;
    $this->commenti = $_commenti;
  }

  // creo funzione che ritorna gli attributi della classe User formattati correttamente.
  public function stampaUtente() {
    return $this->nome . ' ' . $this->cognome . '<br>' . $this->email . '<br>' . $this->data_iscrizione . '<br>' . $this->commenti . '<br>' . '<br>';
  }

}
 ?>
