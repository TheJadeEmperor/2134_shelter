<?php
include('hoverbox.php'); 

$hoverbox = true;
switch($_GET['page']) {
   
    case 'news':
        $fileName = 'news.php';
        break;
        break;
    case '86st':
        $fileName = '86st.php';
        break;
    case 'history':
        $hoverbox = false; 
        $fileName = 'calendar.html';
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