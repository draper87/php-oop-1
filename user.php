<?php

// creo classe User
class User {
  protected $nome;
  protected $cognome;
  protected $email;
  protected $data_iscrizione;
  protected $commenti;

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
    return [
      'nome' => $this->nome,
      'cognome' => $this->cognome,
      'email' => $this->email,
      'data' => $this->data_iscrizione,
      'commenti' => $this->commenti,
    ];

  }

  public function getEmail() {
    echo $this->email;
  }

}
 ?>
