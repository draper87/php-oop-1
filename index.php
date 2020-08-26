<?php
  // Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
  // Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.


  // creo classe User
  class User {
    public $nome;
    public $cognome;
    public $email;
    public $data_iscrizione;
    public $commenti;

    public function __construct($_nome, $_cognome, $_email, $_data_iscrizione, $_commenti) {
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->email = $_email;
      $this->data_iscrizione = $_data_iscrizione;
      $this->commenti = $_commenti;
    }

    public function stampaUtenti() {
      return $this->nome . ' ' . $this->cognome . '<br>' . $this->email . '<br>' . $this->data_iscrizione . '<br>' . $this->commenti . '<br>' . '<br>';
    }

  }

  // creo array di utenti
  $utenti = [
    [
      'nome' => 'Oliver',
      'cognome' => 'Benoit',
      'email' => 'draper87@gmail.com',
      'data_iscrizione' => '01-01-2018',
      'commenti' => '28'
    ],
    [
      'nome' => 'Francesco',
      'cognome' => 'Rossi',
      'email' => 'francesco@gmail.com',
      'data_iscrizione' => '20-01-2019',
      'commenti' => '16'
    ],
    [
      'nome' => 'Filippo',
      'cognome' => 'Testi',
      'email' => 'filippo@libero.it',
      'data_iscrizione' => '31-10-2019',
      'commenti' => '7'
    ]
  ];

  foreach ($utenti as $utente) {
    $singoloUtente = new User($utente['nome'], $utente['cognome'], $utente['email'], $utente['data_iscrizione'], $utente['commenti']);
    echo $singoloUtente->stampaUtenti();
  }


 ?>
