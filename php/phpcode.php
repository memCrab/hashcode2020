<?php

$fileName = "a_example.txt";
$file = file_get_contents("../" . $fileName);
$lines = explode("\n", $file);

list($Books, $Libs, $Days) = explode(" ", $lines[0]);
$Score = explode(" ", $lines[1]);

$q = [];

for ($i = 0; $i < $Libs; $i++) {
	$line = 2 * ($i + 1);
	list($ll[$i]['books'], $ll[$i]['days'], $ll[$i]['ship']) = explode(" ", $lines[$line]);
	$bb[$i] = explode(" ", $lines[$line + 1]);
}