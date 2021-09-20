<?php
 
  $receiving_email_address = 'untammedcreativity@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject ="Notify me request";

  
  $contact->smtp = array(
    'host' => 'smtp.gmail.com',
    'username' => 'untammedcreativity@gmail.com',
    'password' => 'Munyaradzi02',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'Name');
  $contact->add_message( $_POST['email'], 'Email');

  echo $contact->send();
?>
