<?php

      $language = $_GET['language'];
      $language = str_replace("..//", "", $language); 
      $language = str_replace("....//", "", $language);
      include($language); 
 

?>
