<?php
// $numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $sum = 0;
// $count = 0;

// foreach ($numeri as $num) {
//     if ($num % 2 == 0) {
//         $sum += $num;
//         $count++;
//     }
// }

// $average = $count > 0 ? $sum / $count : 0;

// echo "La media dei numeri pari è: " . ; -->



$utenti = [
    ['nome' => 'Pippo', 'cognome' => 'Pluto', 'genere' => 'M'],
    ['nome' => 'Pippa', 'cognome' => 'Pluta', 'genere' => 'F'],
    // Aggiungi altri utenti qui
];

foreach ($utenti as $utente) {
    $saluto = "Buongiorno ";

    if ($utente['genere'] === 'M') {
        $saluto .= "Sig. ";
    } elseif ($utente['genere'] === 'F') {
        $saluto .= "Sig.ra ";
    }

    $saluto .= $utente['nome'] . " " . $utente['cognome'];
 
    echo $saluto . "";
}