<?php

//      $language = $_GET['language'];
      $language = str_replace("../", "", $_GET['language']); 
      include($language); 
 

?>
