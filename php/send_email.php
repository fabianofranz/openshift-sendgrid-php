<?php
  include 'libs/SendGrid_loader.php';

  $sendgrid = new SendGrid(getenv('SENDGRID_USERNAME'), getenv('SENDGRID_PASSWORD'));

  $mail = new SendGrid\Mail();
  $mail->
    addTo('ffranz@redhat.com')->
    setFrom('fabianofranz@coolendar.com')->
    setSubject('Sendgrid QuickStart ' . date('l jS \of F Y h:i:s A'))->
    setText('Hello World!')->
    setHtml('Hello World!');

  $response = $sendgrid->
                web->
                  send($mail);
?>