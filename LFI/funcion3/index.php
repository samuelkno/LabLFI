<?php
    if (isset($_GET['language'])) { 
         $languageFile = $_GET['language']; 
         $content = @file_get_contents($languageFile);  
         echo $content; 
    }
?>
