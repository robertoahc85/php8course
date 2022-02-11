<?php
$file = fopen("sample.txt", "w");

fwrite($file, "Some content");

if (fsync($file)) {
    echo "File has been successfully persisted to disk.";
}

fclose($file);
?>