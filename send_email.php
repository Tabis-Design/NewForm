<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'tabisdesign@gmail.com';  // Unesite vašu email adresu ovdje
    $subject = 'Nova poruka s web stranice';
    $body = "Ime: $name\nEmail: $email\n\nPoruka:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Poruka je uspjesno poslana.";
    } else {
        echo "Doslo je do greske prilikom slanja poruke.";
    }
}
?>
