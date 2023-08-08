<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" id="meta_viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10">
	<meta name="format-detection" content="telephone=no" />
	<title>RUBISCO SENSOR IoT</title>

	<!-- reset/jQuery -->
	<link rel="stylesheet" href="./css/reset.css">
	<script src="./js/jquery-3.6.1.min.js"></script>

	<!-- slick -->
	<link rel="stylesheet" href="./plug/slickSlider/slick.css">
	<link rel="stylesheet" href="./plug/slickSlider/slick-theme.css">
	<script src="./plug/slickSlider/slick.min.js"></script>

	<!-- css -->
	<link rel="stylesheet" href="./css/main.css">

	<!-- js -->
	<script src="./js/main.js"></script>
</head>
<body>
	<header class="header">
		<div class="inner">
			<div class="leftBox">
				<h1 class="logo">
					<a href="./">
						<img src="./img/logo.png" alt="">
					</a>
				</h1>
				<h2>RUBISCO SENSOR IoT</h2>
				<div class="lanBox">
					<h3>
						<span>language</span>
						<img src="./img/icon_down.png" alt="">
					</h3>
					<ul class="optionBox">
						<li><a href="#">Korean</a></li>
						<li><a href="#">English</a></li>
					</ul>
				</div>
			</div>
			<div class="rightBox">
				<div class="timeBox">
					<img src="./img/icon_time.png" alt="">
					<p>12:00</p>
				</div>
				<button class="adminBtn">사용자관리</button>
				<ul class="utilBox">
					<li><a href="#">Login</a></li>
					<!-- <li><a href="#">Logout</a></li> -->
					<li class="onoff">
						<span></span>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<div class="contents">
		<section class="deviceSection">
			<div class="inner">
				<? for($i=0; $i<=10; $i++){ ?>
				<article>
					<h3 class="fixOpen">Device ID_#<?=$i+1?></h3>
					<h4>yyyy-mm-dd hh:mm:ss</h4>
					<ul>
						<li>
							<a href="#">
								<img src="./img/icon_tem.png" alt="">
								<div class="txtBox">
									대기중 <strong>온도값℃</strong>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./img/icon_hum.png" alt="">
								<div class="txtBox">
									대기중 <strong>습도값</strong>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./img/icon_co2.png" alt="">
								<div class="txtBox">
									대기중 <strong>CO2 ppm</strong>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="./img/icon_tem2.png" alt="">
								<div class="txtBox">
									토양내 <strong>온도값℃</strong>
								</div>
							</a>
						</li>
					</ul>
					<a href="#" class="bottom">
						Location Tag_Name
					</a>
				</article>
				<? } ?>
			</div>
		</section>

		<section class="dataSection">
			<div class="inner">
				<article class="searchBox">
					<form action="">
						<ul>
							<li><input type="date" name="" id="" data-placeholder="시작 년-월-일" required aria-required="true"></li>
							<li><input type="date" name="" id="" data-placeholder="종료 년-월-일" required aria-required="true"></li>
							<li>
								<select name="" id="">
									<option value="">Device_ID 선택</option>
									<option value="ex1">ex1</option>
									<option value="ex2">ex2</option>
									<option value="ex3">ex3</option>
									<option value="ex4">ex4</option>
								</select>
							</li>
							<li><a href="#" class="sendOk">
								<img src="./img/icon_search.png" alt="">
								<span>검색</span>
							</a></li>
						</ul>
					</form>
				</article>
				<article class="dataBox">
					<div class="leftBox">
						<!-- 왼쪽 영역 -->
						Table Area
					</div>
					<div class="rightBox">
						<!-- 오른쪽 영역 -->
						Graph Area
					</div>
				</article>
			</div>
		</section>
	</div>

	<aside class="fixBox">
		<article>
			<form action="">
				<h2>Device ID_#1</h2>
				<div class="inputBox">
					<label for="">보정값입력</label>
					<input type="text" name="" id="" placeholder="보정값을 입력해주세요.">
				</div>
				<ul>
					<li class="cancle"><a href="#">취소</a></li>
					<li><a href="#">확인</a></li>
				</ul>
			</form>
		</article>
	</aside>

	<!-- <footer class="footer">
		<div class="inner">
			<h2 class="fLogo">
				<img src="./img/fLogo.png" alt="">
			</h2>
			<p>Copyright &copy; GST. All Right Reserved.</p>
		</div>
	</footer> -->
</body>
</html>