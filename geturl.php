<?php
/*
*
可以获取URL格式化内容
*/
ini_set('display_errors',0);
header('Content-Type:text/html; charset=gb2312');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />


<title>工具</title>


<style>
html{
        overflow-x:hidden;
        overflow-y:auto;
}
</style>
</head>

<body>

<form id="form3" name="form3" method="post" action="">
<h3>
显示位置
		<input type="radio" <? echo ($_POST['viewpage']=='textarea')?'checked="checked"':''?> value="textarea" name="viewpage">textarea &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" <? echo ($_POST['viewpage']=='page')?'checked="checked"':''?> value="page" name="viewpage">页面
			
<br>	<br>
显示类型			<input type="radio" <? echo ($_POST['viewtype']=='print')?'checked="checked"':''?> name="viewtype" value="print" checked="checked">print  &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" <? echo ($_POST['viewtype']=='var_dump')?'checked="checked"':''?> name="viewtype" value="var_dump">var_dump
  </h3>
	<table width="700" cellspacing="1" cellpadding="0" class="table_list">
		<tr>
			<td style="width:50px;">
				serialize
			</td>
			<td>
				<input type="text" name="url" id="url" value="<?=$_POST['url']?>" style="width:1000px" >
			</td>
		</tr>
		<tr>
			<td >
				json
			</td>
			<td>
				<input type="text" name="url1" id="url1" value="<?=$_POST['url1']?>" style="width:1000px" >
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="button" id="button" value="提交" />
			</td>
		</tr>
	</table>
</form>

<?php 
if($_POST['url']||$_POST['url1']){
	$url  = $_POST['url'];
	$url1 = $_POST['url1']?$_POST['url1']:'';

}
?>
<? 

	if($_POST['viewpage']=='textarea'){
	
		echo '<textarea rows="100" cols="200" style="border:solid 5px #f00;">';
	}else{
		echo '<pre>';
	}
	

	
	if($url){ 
		$interface_news = unserialize(@file_get_contents($url));
		if($_POST['viewtype']=='print'){
	
			print_r($interface_news); die;
		}else{
			var_dump($interface_news); die;
		}
	}
	if ($url1){
		
		$interface_news = json_decode(@file_get_contents($url1));
		if($_POST['viewtype']=='print'){
			print_r($interface_news); die;
		}else{
			var_dump($interface_news); die;
		}
	}
	
	
	
	
	
	if($_POST['view']=='textarea'){
		echo '</textarea>';
	}
	?>


