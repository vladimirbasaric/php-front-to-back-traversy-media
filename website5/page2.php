<?php
    setcookie('username', 'Frank', time() + (86400 *30));

    // Delete Cookie
    setcookie('username', 'Frank', time() - 3600);

    if(count($_COOKIE) > 0){
        echo 'There are '.count($_COOKIE). ' cokkies saved<br>';
    } else {
        echo 'Ther are no cookie saved<br>';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '. $_COOKIE['username'] . ' is set<br>';
    } else{
        echo 'User is not set';
    }