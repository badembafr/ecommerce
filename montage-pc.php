<?php
if(isset($_POST['submit'])) {
    $to = "sangarebademba.mail@gmail.com";
    $subject = "Formulaire Montage PC";
    $message = "Coordonnées:\n";
    $message .= "Nom: " . $_POST['nom'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Numéro de téléphone: " . $_POST['numero'] . "\n";
    $message .= "Adresse Postale: " . $_POST['adresse'] . "\n\n";
    $message .= "Composants:\n";
    $message .= "Processeur: " . $_POST['cpu'] . "\n";
    $message .= "Carte graphique: " . $_POST['gpu'] . "\n";
    $message .= "Ventirad / Watercooling: " . $_POST['ventirad-wc'] . "\n";
    $message .= "Carte mère: " . $_POST['cm'] . "\n";
    $message .= "Mémoire RAM: " . $_POST['ram'] . "\n";
    $message .= "Stockage 1: " . $_POST['ssd-m.2.1'] . "\n";
    $message .= "Stockage 2: " . $_POST['ssd-m.2.2'] . "\n";
    $message .= "Stockage 3: " . $_POST['hdd.1'] . "\n";
    $message .= "Boitier: " . $_POST['boitier'] . "\n";
    $message .= "Alimentation: " . $_POST['alimentation'] . "\n\n";
    $message .= "Options:\n";
    $message .= "Installation de Windows 10/11 et activation de Windows 10/11 Pro: " . $_POST['os'] . "\n";
    $message .= "Installation des pilotes/drivers, activation de l’XMP dans le BIOS pour la RAM, mises à jours Windows Update et logiciels de gestion de RGB/Watercooling/Périphériques: " . $_POST['drivers'] . "\n";
    $message .= "Tests des performances du PC : vérification des températures, performances en jeu, pourcentage d’utilisation des composants. Via, CPU-Z,...: " . $_POST['test'] . "\n";
    $header = "From: " . $_POST['email'];
    if(mail($to, $subject, $message, $header)) {
        echo "Message envoyé!";
    } else {
        echo "Echec d'envoi du message!";
    }
}
?>