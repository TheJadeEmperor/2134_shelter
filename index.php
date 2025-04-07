<?php

switch($_GET['page']) {
    case 'volunteer':
        $fileName = 'volunteer.html';
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