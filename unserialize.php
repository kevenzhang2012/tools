<?php
header("Content-type: text/html; charset=gbk");
$url = $_POST['url']?$_POST['url']:'';
?>
<form action ='unser.php' method='post'>
<input type='text' name = 'url' value='<? echo $url?$url:'';?>' style="width:1000px;">
<input type='submit' value='submit' >
</form>

<?php


if(isset($_POST['url'])){
	
	echo $url;
	$array = unserialize(file_get_contents($url));
	echo '<pre>';
	/*print_r($array);
	foreach($array as $k=>$v){
		echo $k."<br>";
		foreach($v as $k1=>$v1){
			
			foreach($v1 as $k2=>$v2){
				$array[$k][$k1][$k2]=$v2['pserid'];
			}
			
		}
		
	}
	*/
	print_r($array);
	echo '</pre>';
	
}
