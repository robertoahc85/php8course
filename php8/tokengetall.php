<?php
   $tokens = token_get_all("<?php echo; ?>");

   foreach($tokens as $token) {
      if(is_array($token)) {
         echo "Line {$token[2]}: ", token_name($token[0]), " ('{$token[1]}')", PHP_EOL;
      }
   }
   echo "<br>"

?>

<?php
   $tokens = token_get_all("/* comment */");

   foreach($tokens as $token) {
      if(is_array($token)) {
         echo "Line {$token[2]}: ", token_name($token[0]), " ('{$token[1]}')", PHP_EOL;
      }
   }
   echo "<br>"
?>

<?php
   $source = <<<"code"
   <?php
   class A {
      const PUBLIC = 1;
   }
   code;

   $tokens = token_get_all($source, TOKEN_PARSE);

   foreach($tokens as $token) {
      if(is_array($token)) {
         echo token_name($token[0]) , PHP_EOL;
      }
   }
?>