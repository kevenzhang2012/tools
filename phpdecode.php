<?php
ini_set('display_errors',1);
error_reporting(7);
$url = $_GET['url'];
echo $url;
if($url){
        echo '<pre>';
        $c = file_get_contents($url);

        var_dump(json_decode($c));

}else{
        echo 'please input url';
}
