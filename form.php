<?php

$name = $_POST['name'];
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars($_POST['message']);

mail(
    'twoj-adres@email.pl',
    'Formularz kontaktowy',
    "Treść wiadomości: $message \n\n Imię: $name \n\n Adres e-mail: $email",
    "From: $name <$email>"
);
