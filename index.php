<!DOCTYPE html>

<html>
<head>
	<meta http-equiv = "content-type" content = "text/html" charset = "utf-8">
	<title> 공인 IP 주소 조회 </title>
	<meta name = "author" content = "Antibiotics">
	<meta name = "description" content = "ipaddr.online: 공인 IP 주소 조회">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<meta property = "og:url" content = "https://ipaddr.online">
	<meta property = "og:type" content = "website">
	<meta property = "og:title" content = "공인 IP 주소 조회">
	<meta property = "og:description" content = "ipaddr.online: 공인 IP 주소 조회">
	
	<link href = "./css/ip.css" rel = "stylesheet" type = "text/css">
	<link rel = "preconnect" href = "https://fonts.gstatic.com">
	<link href = "https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel = "stylesheet"> 
	
	<script type = "text/javascript">
		if (screen.width <= 699) {
			document.location = "https://m.ipaddr.online";
		}
	</script>
</head>
	
<body>
	<div id = "head">
		<h1><a class = "a_title" href = "https://ipaddr.online"> ipaddr.online </a></h1>
		<h2>
		<div class = "menu">
		<a class = "a_menu" href = "index.php?menu=main"> 메인</a>
		</div>
		<div class = "menu">
		<a class = "a_menu" href = "index.php?menu=info"> IP 주소란? </a>
		</div>
		<div class = "menu">
		<a class = "a_menu" href = "index.php?menu=notice"> 사이트 정보 </a>
		</div>
		<div class = "menu">
		<a class = "a_menu" href = "https://ping-busan.ipaddr.online"> 핑 테스트 도구 </a>
		</div>
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
			header('Location: index.php?menu=main');
		}
	?>
	</div>
	
	<div id = "footer">
		<p>
		ip database by <b>ipinfo.io</b> <br>
		© 2020. ipaddr.online
		</p>
	</div>
</body>
</html>