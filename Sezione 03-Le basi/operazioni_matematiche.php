<?php
/*
 * Corso PHP & MYSQL 
 * Utente: Daniele Mondello
 * Web Site: danielemondello.it
 * Email:info@danielemondello.it
 * Argomento: 
 * Data: 11/04/14
 */

    //Definisco le variabili e gli attribuisco un valore
    $primo_numero = 10;

    $secondo_numero =2;

    //Effettuo le quattro operazioni fondamentali con  i numeri

    //Moltiplicazione
    $risultato_moltiplicazione= ($primo_numero * $secondo_numero);

    //Addizione
    $risultato_addizione= ($primo_numero + $secondo_numero);

    //Sottrazione
    $risultato_sottrazione= ($primo_numero - $secondo_numero);

    //Divisione
    $risultato_divisione= ($primo_numero / $secondo_numero);


    //Stampo a video i risultati delle 4 operazioni
    echo "Utilizzando i numeri <b>". $primo_numero . "</b> ed il numero<b>". $secondo_numero. "</b> ottengo i seguenti risultati:<br>";
    echo "<br> Moltiplicazione: ". $risultato_moltiplicazione. " <br>";
    echo "<br> Addizione: ". $risultato_addizione. " <br>";
    echo "<br> Sottrazione: ". $risultato_sottrazione . " <br>";
    echo "<br> Divisione: ". $risultato_divisione. " <br>";
    echo "<br> ciao a tutti";

