<?php

function setInternalServerError($errno, $errstr, $errfile, $errline) {

    echo '<h1>ERROR</h1>';
    
    switch($errno) {
        case E_USER_ERROR:
            echo '<strong>ERROR</strong> [' . $errno . '] ' . $errstr . "<br />\n";
            echo 'Fatal error on line ' . $errline . ' in file ' . $errfile;
            break;

        case E_USER_WARNING:
            echo '<strong>WARNING</strong> [' . $errno . '] ' . $errstr . "<br />\n";
            break;

        case E_USER_NOTICE:
            echo '<strong>NOTICE</strong> [' . $errno . '] ' . $errstr . "<br />\n";
            break;

        default:
            echo 'Unknow error type: [' . $errno . '] ' . $errstr . "<br />\n";
            break;
    }
    echo '</span>';

    echo '<ul>';
    
    foreach(debug_backtrace() as $error) {
        echo '<li>';
        echo $error['file'] . ':';
        echo $error['line'];
        echo '</li>';
    }

    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');