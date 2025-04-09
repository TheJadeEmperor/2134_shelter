<?php

include('hoverbox.php'); 

switch($_GET['page']) {
    case 'volunteer':
        $fileName = 'volunteer.php';
        break;

    default:
        $fileName = 'index.html';

}

$header = 'header.html';
$footer = 'footer.html';

include($header);
include($fileName);
include($footer);
?>