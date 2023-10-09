<?php

//Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
    $users = [
        ['name' => 'Leonardo', 'surname' => 'Loddo', 'gender' => 'M'],
        ['name' => 'Melissa', 'surname' => 'Bianchi', 'gender' => 'F'],
        ['name' => 'Ugo', 'surname' => 'Gonzales', 'gender' => 'NB'],
    ];
    
    foreach($users as $user){
        if($user['gender'] == 'M'){
            echo "Buongiorno Sig. $user[name] $user[surname]\n";
        } else if ($user['gender'] == 'F'){
            echo "Buongiorno Sig.ra $user[name] $user[surname]\n";
        } else {
            echo "Buongiorno $user[name] $user[surname]\n";
        }
    }

//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array
    $numbers = [1, 5, 3, 20, 5, 6, 4, 7, 2, 15];
    $contatore = 0;
    $somma = 0;
    
    foreach($numbers as $number){
        if($number % 2 == 0){
            $somma += $number;
            $contatore ++;
        }
    }
    
    $media = $somma / $contatore;
    echo $media;

// Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
// se multiplo di 5 stampare “JAVASCRIPT”;
// se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".
    for($i = 1; $i <= 100; $i++){
        switch ($i) {
            case $i % 15 == 0: //$i % 3 == 0 && $i % 5 == 0
                echo "HACKADEMY\n";
                break;
            case $i % 5 == 0:
                echo "JS\n";
                break;
            case $i % 3 == 0:
                echo "PHP\n";
                break;
            default:
                echo "$i\n";
                break;
        }
    }
    for ($i=1; $i <= 100; $i++) { 
        if ($i % 5 == 0 and $i % 3 == 0) {
            echo "HACKADEMY\n";
        }else if ($i % 3 == 0) {
            echo "PHP\n";
        }else if ($i % 5 == 0) {
            echo "JS\n";
        }else {
            echo "$i\n";
        }
    }
