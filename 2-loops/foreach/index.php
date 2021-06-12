<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>working with loops</title>
</head>

<body style="font-family: sans-serif;">
    <?php 
    if($_GET["add"]){
        echo 'add';
    }
    ?>
    <h1>Students Score s</h1>
    <form action="./get-result-score.php" method="get">
        <span>score1</span>
        <input type="number" name="score1">
        <br>
        <br>
        <span>score2</span>
        <input type="number" name="score2">
        <br>
        <br>
        <span>score3</span>
        <input type="number" name="score3">
        <br>
        <br>
        <span>score4</span>
        <input type="number" name="score4">
        <br>
        <br>
        <span>score5</span>
        <input type="number" name="score5">
        <br>
        <br>
        <span>score6</span>
        <input type="number" name="score6">
        <br>
        <br>
        <span>score7</span>
        <input type="number" name="score7">
        <br>
        <br>
        <button type="submit" name="sub">SUBMIT</button>
    </form>

    <form  method="get">
        <button name="add" >+</button>
    </form>
</body>

</html>