
<?php

$a = 0;

for ($i = 0; $i < 100000000000; $i++) {
    $a += $i;
}

echo $a;
?>