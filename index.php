<!-- esercizio di oggi: Secondo step con i nostri oggetti
nome repo: php-oop-2
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online.
Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario.
Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
oppure diverse tipologie di prodotti.
BONUS:
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
        $c = new CreditCard(..);
        $user->insertCreditCard($c);
2.    Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php
    require_once __DIR__ . '/Users/User.php';
    require_once __DIR__ . '/Users/UserDeliver.php';
    require_once __DIR__ . '/Users/UserPremium.php';
    require_once __DIR__ . '/Products/product.php';
    require_once __DIR__ . '/Products/Ovens.php';
    require_once __DIR__ . '/Products/washingMachines.php';

    $myWashingMachine = new washingMachines(399, 'Indesit', 'BWE 71283X W IT N', 'white', 'D', 500, [85,60,58], 7, 1200, 'front-load');
    var_dump($myWashingMachine); 
?>


