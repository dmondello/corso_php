<?php
/*
 * Corso PHP & MYSQL
 * Utente: Daniele Mondello
 * Web Site: danielemondello.it
 * Email:info@danielemondello.it
 * Argomento: Ciclo Else -IF
 * Data: 15/04/14
 */

$oggi="lunedi";


if ($oggi=="lunedi"){
    print "oggi &egrave; il primo giorno della settimana";
}
elseif ($oggi=="martedi"){
    print "oggi è il secondo giorno della settimana";
}
elseif ($oggi=="mercoledi"){
    print "oggi è il terzo giorno della settimana";
}
elseif ($oggi=="giovdi"){
    print "oggi è il quarto giorno della settimana";
}
elseif ($oggi=="venerdi"){
    print "oggi è il quinto giorno della settimana";
}
elseif ($oggi=="sabato"){
    print "oggi è il sesto giorno della settimana";
}
else{
    print "oggi è il settimo giorno della settimana";
}