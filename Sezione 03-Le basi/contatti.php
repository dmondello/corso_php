<?php
/*
 * Corso PHP & MYSQL 
 * Utente: Daniele Mondello
 * Web Site: danielemondello.it
 * Email:info@danielemondello.it
 * Argomento: 
 * Data: 15/04/14
 */

echo "questo valore arriva dal form ".$_POST['nome']."<br>";

$nome_utente=$_POST['nome'];
$cognome_utente=$_POST['cognome'];




echo  "Ciao ".$nome_utente." ".$cognome_utente."<br>";
echo  "<b>Grazie per avere lasciato un commento!!";
?>
