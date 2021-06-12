<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['userpwd']) && isset($_COOKIE['userage'])){
echo $_COOKIE['username'];
echo $_COOKIE['userpwd'];
echo $_COOKIE['userage'];
}else{
    echo 'we do not have cookie';
}