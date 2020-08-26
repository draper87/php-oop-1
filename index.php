<?php
  // Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
  // Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.

  // includo la classe User
  require_once(__DIR__.'/user.php');

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


  // stampo risultato utilizzando ciclo foreach
  foreach ($utenti as $utente) {
    $singoloUtente = new User($utente['nome'], $utente['cognome'], $utente['email'], $utente['data_iscrizione'], $utente['commenti']);
    echo $singoloUtente->stampaUtente();
  }


 ?>
