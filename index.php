<?php

require './classe/monMail.php';

$mail = new monMail();

$mail->setadresse('vincent.harpin@gmail.com');
$mail->setobjet('mon mail');
$mail->settext('ceci est un mail envoyer avec objet');

mail($mail->getadresse(), $mail->getobjet(), $mail->gettext());
