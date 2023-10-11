<?php
   if (isset($_GET['language'])) { 
      $languageFile = $_GET['language']; 
      require($languageFile); 
   }
?>
