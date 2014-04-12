<?php
/*
 * Corso PHP & MYSQL 
 * Utente: Daniele Mondello
 * Web Site: danielemondello.it
 * Email:info@danielemondello.it
 * Argomento:ciclo IF & IF ELSE
 * Data: 12/04/14
 */

$nome ='Daniele';
$eta='17';
echo $nome. " ha un un'eta di ".$eta ." anni<br>";

if( $eta>=18 ) {

    echo '<br>'.$nome.' risulta <b>maggiorenne </b>';
    echo '<br>'.$nome.' ora guida!';
    }
else {
    echo '<br>'.$nome.' risulta <b>minorenne </b>';
    }