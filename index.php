<?php 
	$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	#echo $lang;
	$lang = explode(",", $lang);
	if ($lang[0] == "ko-KR") {
		include "./lang/ko.php";
	} else {
		include "./lang/en.php";
	}
?>
<!DOCTYPE html>

<html lang = "ko">
<head>
	<meta http-equiv = "content-type" content = "text/html" charset = "utf-8">
	<title> <?=$title1?> </title>
	<meta name = "author" content = "Antibiotics">
	<meta name = "description" content = "ipaddr.online: <?=$title1?>">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<meta property = "og:url" content = "https://ipaddr.online">
	<meta property = "og:type" content = "website">
	<meta property = "og:title" content = "<?=$title1?>">
	<meta property = "og:description" content = "ipaddr.online: <?=$title1?>">
	
	<link href = "./css/ip.css" rel = "stylesheet" type = "text/css">
	<link rel = "preconnect" href = "https://fonts.gstatic.com">
	<link href = "https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel = "stylesheet"> 
	
	<!-- Javascript -->
	<script type = "text/javascript">
		if (screen.width <= 699) {
			document.location = "https://m.ipaddr.online";
		}
	</script>
</head>
	
<body>
	<div id = "head">
	<h1>
		<a class = "a_title" href = "https://ipaddr.online"> ipaddr.online </a>
	</h1>
	<h2>
		<div class = "menu">
		<a class = "a_menu" href = "index.php?menu=main"> <?=$menu1?> </a>
		</div>
		<?php if ($lang[0] == "ko-KR") { ?>
		<div class = "menu">
		<a class = "a_menu" href = "index.php?menu=info"> <?=$menu2?> </a>
		</div>
		<?php } ?>
		<div class = "menu">
		<a class = "a_menu" href = "https://ping-busan.ipaddr.online"> <?=$menu3?> </a>
		</div>
		<div class = "menu">
		<a class = "a_menu" href = "http://v6.ipaddr.online"> <?=$menu4?> </a>
		</div>
		<?php if ($lang[0] == "ko-KR") { ?>
		<div class = "menu">
		<a class = "a_menu" href = "index.php?menu=notice"> <?=$menu5?> </a>
		</div>
		<?php } ?>
	</h2>
	</div>
	
	<div id = "contents">
	<?php 
		if ($_GET['menu'] == 'main') {
			require_once './pages/main.php';
		} else if ($_GET['menu'] == 'info') {
			require_once './pages/info.html';
		} else if ($_GET['menu'] == 'notice') {
			require_once './pages/notice.html';
		} else {
			header('Location: ./index.php?menu=main');
		}
	?>
	</div>
	
	<div id = "footer">
		<p>
		ip database by <b>ipinfo.io</b>
		<br>
		© 2020. ipaddr.online
		</p>
	</div>
</body>
</html>