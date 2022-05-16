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
        echo '<pre>';
        var_dump($user);
        var_dump($registeredUser);
        var_dump($product_1);
        var_dump($product_2);
        echo '<pre>'; 
    ?>
</body>
</html>