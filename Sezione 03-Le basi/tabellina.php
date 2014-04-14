<?php
/*
 * Corso PHP & MYSQL 
 * Utente: Daniele Mondello
 * Web Site: danielemondello.it
 * Email:info@danielemondello.it
 * Argomento: 
 * Data: 11/04/14
 */

    //Stampa a video la tebellina di un qualsiasi numero cambiando il valore della variale
    $numero_tabellina =5;
    echo '<b>Tabellina del '.$numero_tabellina .'</b><br>';

        for ($multiplo = 1; $multiplo <= 10; ++$multiplo) {
            $risultato = $numero_tabellina * $multiplo;
            echo $numero_tabellina." * $multiplo = $risultato <br/>";
        }

