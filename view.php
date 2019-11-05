<?php 
$page = isset($_GET['view']) ? $_GET['view'] : null;
switch($page){
    default:
    case "beranda":
         include "beranda.php";
    	 break;
    case 'lapor':
         include "lapor.php";
    	 break;
   
    case 'info':
       	 include "info.php";
   		 break;
   
}
?>