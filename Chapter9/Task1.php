<?php

//echo $_REQUEST['text'];

switch ($_REQUEST['text']) {
    case 'test1': echo "1"; break; 
    case "test2": echo "2"; break; 
    case "test5": echo "3"; break;
    default: echo "4"; break;
}
?>