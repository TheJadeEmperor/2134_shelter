<?php

include('hoverbox.php'); 

switch($_GET['page']) {
   
    case 'news':
        $fileName = 'news.php';
        break;
    case 'volunteer':
        $fileName = 'volunteer.html';
        break;
    case '86st':
        $fileName = '86st.php';
        break;
    default:
        $fileName = 'home.php';

}

$header = 'header.html';
$footer = 'footer.html';

include($header);
include($fileName);
include($footer);
?>