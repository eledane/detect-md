<?php

require_once 'Parsedown.php';

$parsedown = new Parsedown();

$text = file_get_contents('data/part2.md');

echo $parsedown->text($text);
