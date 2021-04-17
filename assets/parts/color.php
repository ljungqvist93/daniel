<?php
    $themes = [
        'light',
        'dark',
    ];
    $theme = null;
    if(isset($_COOKIE['theme'])) {
        $theme = in_array($_COOKIE['theme'], $themes) ? $_COOKIE['theme'] : 'light';
    }
    if(isset($_GET['theme'])) {
        $location = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
        $params = $_GET;
        unset($params['theme']);
        if(count($params)) {
            $location .= '?'.http_build_query($params);
        }
        if($_GET['theme'] === 'auto') {
            setcookie('theme', null, -1);
            header('Location: '.$location);
            die();
        }
        $theme = in_array($_GET['theme'], $themes) ? $_GET['theme'] : 'light';
        setcookie('theme', $theme, intval(time()+60*60*24*30*360));
        header('Location: '.$location);
        die();
    }
?>