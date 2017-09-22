<?php
/**
 * Created by PhpStorm.
 * User: Cristiano.Moteram
 * Date: 25/05/2017
 * Time: 11:43
 */

$pasta = 'uploads';

if(isset($_GET['file']) && file_exists("{$pasta}/".$_GET['file'])){

	$file = $_GET['file'];

	$type = filetype("{$pasta}/{$file}");
	$size = filesize("{$pasta}/{$file}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: Attachment; filename=$file");
	readfile("{$pasta}/{$file}");
	exit;

}

?>