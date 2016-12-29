<?
$array  =  include('arraydata.cache.php');
$list= array();
echo 'list'.count($array);
foreach ($array as $k=>$r )
{	
	$list[$r[1]][] = $r;
}
//print_r($array);
echo 'list'.count($list);
?>
