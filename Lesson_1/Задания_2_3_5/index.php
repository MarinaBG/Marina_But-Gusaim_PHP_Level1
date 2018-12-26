<!-- Pадание 2. Выполнить примеры из методички, разобраться, как это работает -->
<?php
echo "<h1>Welcome!</h1> <br>";
?>

<?php
$name = "GeekBrains user";
echo "Hello, $name! <br>"; //Hello, GeekBrains user!
?>

<?php
define('MY_CONST', 100);
echo MY_CONST."<br>";// 100
?>

<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";// Десятеричная система 42 
echo "Двоичная система $int2 <br>"; // Двоичная система 42
echo "Восьмеричная система $int8 <br>"; //Восьмеричная система 42 
echo "Шестнадцатеричная система $int16 <br>"; //Шестнадцатеричная система 42 
?>

<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3 <br>"; // 1.5 | 15000 | 6.0E-8
?>

<?php
$a = 1;
echo $a."<br>"; // 1
echo "$a<br>"; // 1
echo "a <br>"; // a
echo 'a'."<br>"; //a
echo '$a'."<br>"; //$a
?>

<?php
$a = 10;
echo $a."<br>"; // 10
$b = (boolean)$a;
echo $b."<br>"; // 1
?>

<?php
$a = 'Hello, ';
$b = 'world';
$c = $a.$b;
echo $c."<br>"; // Hello, world
?>

<?php
$a = 4;
$b = 5;
echo $a + $b."<br>"; // 9 - сложение
echo $a * $b."<br>"; // 20 - умножение
echo $a - $b."<br>"; // -1 - вычитание
echo $a / $b."<br>"; // 0.8 - деление
echo $a % $b."<br>"; // 4 - остаток от деления
echo $a ** $b."<br>"; // 1024 - возведение в степень
?>

<?php
$a = 4;
$b = 5;
echo 'a='.$a."<br>";
$a = 0;
echo $a++."<br>";//0
echo ++$a."<br>";//2
echo $a--."<br>";//2
echo --$a."<br>";//0
?>

<?php
$a = 4;
$b = 5;
echo "$a == $b".var_dump($a == $b)."<br>";//false
echo "$a === $b".var_dump($a === $b)."<br>";//false
echo "$a > $b".var_dump($a > $b)."<br>";//false
echo "$a < $b".var_dump($a < $b)."<br>";//true
echo "$a <> $b".var_dump($a <> $b)."<br>";//true
echo "$a != $b".var_dump($a != $b)."<br>";//true
echo "$a !== $b".var_dump($a !== $b)."<br>";//true
echo "$a <= $b".var_dump($a <= $b)."<br>";//true
echo "$a >= $b".var_dump($a >= $b)."<br>";//false
?>


<!-- Задание 3. Объяснить, как работает данный код -->
<?php
echo "Задание 3<br>";
$a = 5;
$b = '05';
echo " - $a == $b".var_dump($a == $b)."<br>"; //true - т.к. если сравнивать число со строкой или две строки, содержащие числа, каждая строка будет преобразована в число, и сравниваться они будут как числа.
echo " - (int)'012345'".var_dump((int)'012345')."<br>";//12345 - т.к. при преобразовании строки к числу (int) остается число 12345 (ноль отбрасывается).
echo " - (float)123.0 === (int)123.0".var_dump((float)123.0 === (int)123.0)."<br>";//false - т.к. при строгом равенстве будут различными типы данных, к которым произошло преобразование числа 123.0: int - целое число, а float - вещественное число.
echo " - var_dump((int)0 === (int)'hello, world'".var_dump((int)0 === (int)'hello, world')."<br>";// true - т.к. при преобразовании к числу (int) числа 0 и строки 'hello, world' мы получаем значение 0.
?>


<!-- Задание 5. Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя -->
<!-- вариант 1 -->
<?php
echo "Задание 5<br>";
$a = 1;
$b = 2;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "\$a = $a"."<br>";
echo "\$b = $b"."<br>";
?>
<!-- вариант 2 -->
<?php
$a = 1;
$b = 2;
$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;
echo "\$a = $a"."<br>";
echo "\$b = $b"."<br>";
?>
<!-- вариант 3 - шутки ради -->
<?php
$a = 1;
$b = 2;
++$a;
--$b;
echo "\$a = $a"."<br>";
echo "\$b = $b"."<br>";
?>