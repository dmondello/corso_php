<?php
/*
 * Corso PHP & MYSQL 
 * Utente: Daniele Mondello
 * Web Site: danielemondello.it
 * Email:info@danielemondello.it
 * Argomento: Variabili e concatenazione di stringhe
 * Data: 11/04/14
 */

    //Definisco le varibili
    $Nome='Daniele';
    $Cognome='Mondello';
    $cognome='Berlusconi';
    $data='27/08/1971';

    //Stampo a video un intestazione
    echo "<b>I miei dati Anagrafici</b> <br> ";

    //Con una sola riga di codice effettuando un concatenazione di stringhe e variabili ottengo a video la stampa di variabili e valori:
    echo '<b>Nome:</b> '.$nome.'<br>'.'<b>Cognome della persona:</b> '.$cognome.'<br>'.'<b>Data di nascita: </b>'.$data;