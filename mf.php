<?php
$text_before = "moneyforward";
$hairetsu = str_split($text_before);
$text_after = "";
$num = 0;

for ($i=0; $i<= strlen($text_before); $i++) {
  if ($hairetsu[$i] == "o") {
    $hairetsu[$i] = $num;
    $num = $num + 1;
  }
  $text_after = $text_after.$hairetsu[$i];
}
print $text_after;
?>