
<?php

$math_homework = array(
"2 + 2 =",
"4 - 2 =",
"10 / 2 =",
"10 * 2 =",
"10 % 3 =",
);

$random_math_homework = $math_homework[array_rand($math_homework)];

echo $random_math_homework;

?>