<?php
   if (isset($_GET['language'])) {
              $language = $_GET['language'];

              if (strpos($language, '/') === 0) {
           include("lang_" . $language);
       } else {
                   echo "Ruta no válida.";
       }
   } else {
       echo "No se ha especificado un lenguaje.";
   }
?>
