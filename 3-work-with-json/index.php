<?php
$json = file_get_contents('./school.json');
$school = json_decode($json,true);
foreach($school['Students'] as $students){
    foreach($students as $infos){
        echo '<h3 style="font-family: sans-serif;" >'.
             $infos. 
             '</h3>' .'<br/>'. '<br/>';
    }
}