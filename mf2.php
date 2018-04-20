<?php
$text_before = "moneyforward";
$text_after = "";
$num = 0;

foreach (str_split($text_before) as $text) {
  if ($text == "o") {
    $text = $num;
    $num = $num + 1;
  }
  $text_after = $text_after.$text;
}
print $text_after;
?>