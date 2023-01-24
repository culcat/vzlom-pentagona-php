<?php
$a = rand(-3, 1);
echo $a."\n";
if ($a < 0) {
    echo 'Верно'."\n";
} else {
    echo 'Лох'."\n";
}
$b = rand(-3, 1);
echo $b."\n";
if ($b >= 0) {
    echo 'Верно';
} else {
    echo 'Лох';
}
