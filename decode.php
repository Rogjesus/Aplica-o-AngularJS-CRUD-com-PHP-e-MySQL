<?php
   $json1 = '{"a":1,"b":2,"c":3,"d":4,"e":5}';  
   
  var_dump(json_decode($json1));
 
  var_dump(json_decode($json1, true));
 
?>