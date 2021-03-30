<?php
	$ip = $_SERVER['REMOTE_ADDR'];
	$org = trim(file_get_contents("https://ipinfo.io/{$ip}/org"));
	$org = preg_replace("/[0-9]/","", $org);
	$isp = str_replace(array("AS", "/[^a-z]/i"),'',$org);
?>
<div class = "ip">
	<p id = "contents_title" class = "contents_title"> 이 디바이스의 공인 IP 주소 </p>
	<a class = "contents_ip" href = "http://<?=$ip?>"><?=$ip?></a>
	<p class = "contents_isp"> <?=$isp?> </p>
</div>
