<?php
$number1 = $_GET['num1'];
$number2 = $_GET['num2'];
$mark = $_GET['mark'];
function calc($num1, $num2, $mark)
{
    if ($num1 == null || $num2 == null) {
        $res = " You need to put value in inputs";
    } else {
        global $res;
        if ($mark == '+') {
            $res = $num1 + $num2;
        } else
        if ($mark == '-') {
            $res = $num1 - $num2;
        } else
        if ($mark == '/') {
            $res = $num1 / $num2;
        } else
        if ($mark == '*') {
            $res = $num1 * $num2;
        } else
        if ($mark == '%') {
            $res = round($num1);
        } else
        if ($mark == '^') {
            for ($i = 0; $i + 1 < $num2; $i++) {
                if ($i == 0) {
                    $res;
                    $res = $num1 * $num1;
                } else {
                    $res;
                    $res = $res * $num1;
                }
            }
        }

        return $res;
    }
}
$final_res = calc($number1, $number2, $mark);
echo $final_res;
