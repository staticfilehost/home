<?php
// Demonstrate the use of header() function 
// to refresh the current page 
   
echo "Welcome to index page</br>"; 
echo "Page will refresh in every 3 seconds</br></br>"; 
    
// The function will refresh the page  
// in every 3 second 
header("refresh: 3"); 
    
echo date('H:i:s Y-m-d'); 
  
exit; 
?>
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;
?>
