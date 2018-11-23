<?php
/**
 * Created by PhpStorm.
 * User: MEILOHI
 * Date: 23.11.2018
 * Time: 10.34
 */
    $dir    = getcwd (  );
    $files = scandir($dir, 1);
    $html = '<ul>';
    foreach ($files as $key => $value) {
        if(is_dir($value) && substr($value, 0,1 )!=".") {
            $html .= '<li><a href="' . $value . '">' . $value . '</a></li>';
        }
    }
    $html .= '</ul>';
    echo $html;