<?php

$variable= date("m");

switch($variable) {

case 1:

include 'enero.php';


break;

case 2:

include 'febrero.php';


break;

case 3:

include 'marzo.php';


break;

case 4:

include 'abril.php';

break;



case 5:

include 'mayo.php';

break;

case 6:

include 'junio.php';

break;

case 7:

include 'julio.php';


break;


case 8:

include 'agosto.php';


break;

case 9:

include 'septiembre.php';


break;

case 10:

include 'octubre.php';


break;


case 11:

include 'noviembre.php';

break;


case 12:

include 'diciembre.php';

break;


default:

echo '$variable no es igual a 1, 2 al 12.';

}

?>