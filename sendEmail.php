<?php

  // creo metodo per visualizzare email inviate ai dipendenti
  trait SendEmail  {

    public function sendEmail($emailTo, $email_object)
    {
      return 'Email inviata a: ' . $emailTo . ' con oggetto: ' . $email_object . '<br>';
    }
  }


 ?>
