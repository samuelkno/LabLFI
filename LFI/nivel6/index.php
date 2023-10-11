<?php

       if(preg_match('/^\.\/languages\/.+$/', $_GET['language'])) {
          include($_GET['language']);
       } else {
          echo 'Illegal path specified!';
       }   

?>
