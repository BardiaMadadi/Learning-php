<?php
$scores = array(
    'score1' => $_GET["score1"],
    'score2' => $_GET['score2'],
    'score3' => $_GET['score3'],
    'score4' => $_GET['score4'],
    'score5' => $_GET['score5'],
    'score6' => $_GET['score6'],
    'score7' => $_GET['score7']
);
if (
    $scores['score1'] == null ||
    $scores['score2'] == null ||
    $scores['score3'] == null ||
    $scores['score4'] == null ||
    $scores['score5'] == null ||
    $scores['score6'] == null ||
    $scores['score7'] == null
) {
    echo '<h1> You have to put some vars </h1>';
} else {
    global $scores;
    $res = 0;
    foreach ($scores as $row) {
        $res = $res + $row / 7;
    }
    global $res;
    echo '    <h1>Your Final Result is :</h1>' .
        '<h2>' . $res . '</h2>'.' => '.'<h2>'.round($res).'</h2>';
}
