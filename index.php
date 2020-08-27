<?php
  // Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
  // Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.

  // includo le classi
  require_once(__DIR__.'/sendEmail.php');
  require_once(__DIR__.'/user.php');
  require_once(__DIR__.'/employee.php');


  // includo database utenti normali
  require(__DIR__.'/database.php');

  // creo istanza di esempio per un dipendente
  $dipendente = new Employee('Giacomo', 'Verdi', 'dipendente1@gmail.com', '01-01-2016', '40');
  $dipendente->setLivelloAnzianita(3);
  $email_dipendente = $dipendente->sendEmail($dipendente->getEmail(), 'Ferie');
  $stampa_dipendente = $dipendente->stampaUtente();

 ?>

 <h2>Sezione utenti normali</h2>
 <?php foreach ($utenti as $utente) {
   $singoloUtente = new User($utente['nome'], $utente['cognome'], $utente['email'], $utente['data_iscrizione'], $utente['commenti']);
   $stampa_singolo_utente = $singoloUtente->stampaUtente(); ?>
   <ul>
     <li>Nome: <?php echo $stampa_singolo_utente['nome'] ?></li>
     <li>Cognome: <?php echo $stampa_singolo_utente['cognome'] ?></li>
     <li>Email: <?php echo $stampa_singolo_utente['email'] ?></li>
     <li>Data iscrizione: <?php echo $stampa_singolo_utente['data_iscrizione'] ?></li>
     <li>Commenti: <?php echo $stampa_singolo_utente['commenti'] ?></li>
   </ul>
 <?php } ?>

 <h2>Sezione dipendenti</h2>
 <ul>
   <li>Nome: <?php echo $stampa_dipendente['nome']; ?></li>
   <li>Cognome: <?php echo $stampa_dipendente['cognome']; ?></li>
   <li>Email: <?php echo $stampa_dipendente['email']; ?></li>
   <li>Data iscrizione: <?php echo $stampa_dipendente['data_iscrizione']; ?></li>
   <li>Commenti: <?php echo $stampa_dipendente['commenti']; ?></li>
   <li>Livello anzianità: <?php echo $stampa_dipendente['livello']; ?></li>
   <li><?php echo $email_dipendente ?></li>
 </ul>
