<?
    include "mathOperations.php";
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $mathOperation = $_POST['mathOperation'];

    $result = mathOperation($num1, $num2, $mathOperation);

    echo $result;
?>