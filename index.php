<?php
    // phpinfo();

    /*
        Provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
        L'e-commerce vende prodotti per gli animali.
        I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
        L'utente potrà sia comprare i prodotti senza registrarsi, 
        oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
        Il pagamento avviene con la carta di credito, che non deve essere scaduta.
        Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce.
    */

    include_once __DIR__ . "/classes/user.php";
    include_once __DIR__ . "/classes/product.php";
    include_once __DIR__ . "/classes/creditCard.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>
    <?php   
        // USER
        echo '<h3> Utente non registrato: </h3>';
        echo '<pre>';
        var_dump($user);
        echo '</pre>';

        // DISCOUNT FOR USER
        echo 'Sconto per clienti non registrati: ' . $user->getDiscount();

        // REGISTERED USER
        echo '<h3> Utente registrato: </h3>';
        echo '<pre>';
        var_dump($registeredUser);
        echo '</pre>';

        // DISCOUNT FOR REGISTERED USER
        echo 'Sconto per clienti registrati: ' . $registeredUser->getDiscount() . '<br>';

        // CREDIT CARD 1
        echo '<h3> Controllo validità carta di credito: </h3>';
        echo '<pre>';
        var_dump($creditCard_1);
        echo '</pre>';
        echo 'Prima carta di credito: ' . $creditCard_1->isValid();

        // CREDIT CARD 2
        echo '<pre>';
        var_dump($creditCard_2);
        echo '</pre>';
        echo 'Seconda carta di credito: ' . $creditCard_2->isValid();

    ?>
</body>
</html>