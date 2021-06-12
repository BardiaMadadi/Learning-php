<!DOCTYPE html>
<html lang="en">
<?php ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-family: sans-serif;">
    <h1>CALC</h1>
    <form action="./do-calc.php" method="get">
        <input type="number" name="num1" id="">
        <br />
        <br />
        <input type="number" name="num2" id="">
        <br />
        <br />
        <select style="width: 50px;height:50px;font-size:50px " name="mark" id="">
            <option style="width: 50px;height:50px;font-size:50px " value="+"> + </option>
            <option style="width: 50px;height:50px;font-size:50px " value="-"> - </option>
            <option style="width: 50px;height:50px;font-size:50px " value="*"> X </option>
            <option style="width: 50px;height:50px;font-size:50px " value="/"> / </option>
            <option style="width: 50px;height:50px;font-size:50px " value="%"> => </option>
            <option style="width: 50px;height:50px;font-size:50px " value="^"> ^ </option>
        </select>
        <br /><br />
        <button name="sub" type="submit">SUBMIT</button>
    </form>


</body>

</html>