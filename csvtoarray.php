<?
/**
把字符串到数组然后再处理
*/
//echo __FILE__;
$dir = pathinfo(__FILE__,PATHINFO_DIRNAME);
$name = 'data';
$file_in_name = $name.'.csv';
$file_out_name = $name.'.cache.csv';
if(file_exists($file_in_name)){
	$str= file_get_contents($name.'.csv');
	$filename = $name.'.cache.php';
	echo $filename;
	$a = explode("\n",$str);
	$temp = array();
	foreach($a as $row){
	  $ta = explode(";",$row);
	  $temp[]=$ta;
	}

   $data = var_export($temp,true);
   file_put_contents($filename,'<?php '."\r\nreturn ".$data."\r\n".'?>');
   echo '<pre>';
   var_dump($data);
   echo 'ok';
}else{
	echo "please create {$file_in_name}";
}
exit;

?>
