<?php
function page(){
    if (!empty($_GET['page'])){
        $pages = $_GET['page'];
        if (file_exists('pages/'.$pages.'.php')){
            include 'pages/'.$pages.'.php';
        }
    }else{
        include 'pages/home.php';
    }
}