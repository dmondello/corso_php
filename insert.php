

<?php print ("Pete è anche bravo una volta all'anno"); ?>



<?php
        print ("Pete è anche bravo una volta all'anno");
?>


<?php
/*
 * Corso PHP & MYSQL 
 * Utente: Daniele Mondello
 * Web Site: danielemondello.it
 * Email:info@danielemondello.it
 * Argomento: 
 * Data: 16/04/14
 */

// Fase 1 - Arrivano i dati dal form
// Fase 2 - Connessione al DB
// Fase 3 - Esegui la query seguente;

$Nome="Roberto";
$Cognome="Bettega";
$Eta="50";


$collegamento = 'mysql:host=localhost;port=8889;dbname=classe';
$db = new PDO($collegamento , 'root', 'root');


$sql = $db->exec("INSERT INTO `classe`.`studenti` (`Id`, `Nome`, `Cognome`, `eta`) VALUES (NULL, '".$Nome."','".$Cognome."','".$Eta."')");
 echo "Dato inserito!";



