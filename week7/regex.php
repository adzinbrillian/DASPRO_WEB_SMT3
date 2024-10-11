<?php

$pattern = '/[0-9]{1,3}/';
$text = 'There are asdfghjkl.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br>";

$pattern = '/[o]{1,3}/';
$replacement = 'hehehe';

$text = 'huhuhuhihihihohoho.';
$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text;

?>