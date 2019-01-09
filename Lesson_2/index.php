<?
//Задание 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;
// ноль можно считать положительным числом.

echo "Задание 1<br>";

$a = rand(-10, 10);
$b = rand(-10, 10);

if($a>=0 && $b>=0) {
    echo "$a - $b = ".($a - $b)."<br>";
}
elseif($a<0 && $b<0) {
    echo "$a * $b = ".($a * $b)."<br>";
}
else {
    echo "$a + $b = ".($a + $b)."<br>";
}

echo "<br>";


// Задание 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
echo "Задание 2<br>";

$a = rand(0, 15);

switch($a) {
    case 0:
        echo "$a<br>";
        $a++;
    case 1:
        echo "$a<br>";
        $a++;
    case 2:
        echo "$a<br>";
        $a++;
    case 3:
        echo "$a<br>";
        $a++;
    case 4:
        echo "$a<br>";
        $a++;
    case 5:
        echo "$a<br>";
        $a++;
    case 6:
        echo "$a<br>";
        $a++;
    case 7:
        echo "$a<br>";
        $a++;
    case 8:
        echo "$a<br>";
        $a++;
    case 9:
        echo "$a<br>";
        $a++;
    case 10:
        echo "$a<br>";
        $a++;
    case 11:
        echo "$a<br>";
        $a++;
    case 12:
        echo "$a<br>";
        $a++;
    case 13:
        echo "$a<br>";
        $a++;
    case 14:
        echo "$a<br>";
        $a++;
    case 15:
        echo "$a<br>";
        break;
    default:
        die("Некорректное число");
}

echo "<br>";


//Задание 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
echo "Задание 3<br>";

function sum($a, $b) {
    return $a + $b;
}

function sub($a, $b) {
    return $a - $b;
}

function mul($a, $b) {
    return $a * $b;
}

function div($a, $b) {
    return $a / $b;
}

echo "$a + $b = ".sum(5, 7)."<br>";
echo "$a - $b = ".sub(5, 7)."<br>";
echo "$a * $b = ".mul(5, 7)."<br>";
echo "$a / $b = ".round(div(5, 7), 2)."<br>";

echo "<br>";


//Задание 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
echo "Задание 4<br>";

function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {
        case "sum":
            return sum($arg1, $arg2);        
        case "sub":
            return sub($arg1, $arg2);
        case "mul":
            return mul($arg1, $arg2);
        case "div":
            return div($arg1, $arg2);
        default:
            die("Некорректное название операции");
    }
}

echo mathOperation(3, 8, "sum")."<br>";
echo mathOperation(3, 8, "sub")."<br>";
echo mathOperation(3, 8, "mul")."<br>";
echo round(mathOperation(3, 8, "div"), 2)."<br>";

echo "<br>";


//Задание 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
echo "Задание 6<br>";

function power($val, $pow) {
    if($pow==0) {
        return 1;
    }
    
    return $val * power($val, --$pow);    
}

echo power(2, 4)."<br>";
echo power(3, 4)."<br>";
echo power(5, 3)."<br>";
echo power(5, 0)."<br>";

echo "<br>";


//Задание 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты

echo "Задание 7<br>";

function getCurrentTime() {
    function checkHour($hour) {
        $substrHour = substr($hour, -1);

        if ($substrHour == 1 && $hour != "11") {
            return "час";
        } 
        elseif ($substrHour == 2 && $hour != "12" || $substrHour == 3 && $hour != "13" || $substrHour == 4 && $hour != "14")  {
            return "часа";
        }
        else {
            return "часов";
        }
    }

    function checkMin($min) {
        $substrMin = substr($min, -1);

        if ($substrMin == 1 && $min != "11") {
            return "минута";
        } 
        elseif ($substrMin == 2 && $min != "12" || $substrMin == 3 && $min != "13" || $substrMin == 4 && $min != "14")  {
            return "минуты";
        }
        else {
            return "минут";
        }
    }

    $hour = date("H");
    $min = date("i");

    return $hour." ".checkHour($hour)." ".$min." ".checkMin($min);
}

echo getCurrentTime();

?>