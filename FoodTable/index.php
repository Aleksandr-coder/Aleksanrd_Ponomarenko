<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style/slick-theme.css">
	<link rel="stylesheet" href="style/slick.css">
	<link rel="stylesheet" href="style/style.css">
	<title>Food4you</title>
</head>
<body>
	<div class="scroll_up">
		<a href="#">up</a>
	</div>
	<header class="header">
		<div class="wrapper">
			<img class="header_bg" src="img/header_bg.webp" alt="">
			<div class="logo_and_phone">
				<div class="logo">
					<img class="img_logo" src="img/logo.webp" alt="">
				</div>
				<div class="phone">
					<div class="block_phone">
						<p class="title">Express delivery</p>
						<p class="number">1800 258 888</p>
					</div>
					<div class="img_iphone">
						<img class="iPhone" src="img/iPhone.webp" alt="">
					</div>
				</div>
			</div>
			<nav class="menu-top">
				<ol class="menu-list">
					<li class="menu-item"><a class="menu-link" href="#">Home</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Menu</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Our Story</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Reservation</a></li>
					<li class="menu-item"><a class="menu-link" href="#contacts">Contact us</a></li>
				</ol>
				<div class="menu_bar"><span></span></div>
			</nav>
			<div class="header_content">
				<img class="header_content_bg" src="img/header_content_bg.webp" alt="">
				<div class="header_text">
					<p class="questions">Are You Hungry?</p>
					<p class="dont_wait">Dont Wait!</p>
					<p class="let_start">let start to order food now</p>
					<hr>
					<div class="happy_hours">
						<div class="text"><p>This monday<br>happy hours</p></div>
						<div class="number"><p>1+1=3</p></div>
					</div>
					<button class="order_now">Order now</button>
				</div>
			</div>
		</div>
	</header>
	<main class="main">
		<section class="food_table">
			<img class="rectangle" src="img/rectangle.webp" alt="">
			<div class="wrapper">
				<div class="title_block">
					<h2>Choose & Enjoy</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
				</div>
				<div class="container_food">
					<div class="block">
						<img src="img/table_food_1.webp" alt="">
						<h3 class="title">Lorem ipsum dolor</h3>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
						<button>Order Now</button>
					</div>
					<div class="block">
						<img src="img/table_food_2.webp" alt="">
						<h3 class="title">Lorem ipsum dolor</h3>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
						<button>Order Now</button>
					</div>
					<div class="block">
						<img src="img/table_food_3.webp" alt="">
						<h3 class="title">Lorem ipsum dolor</h3>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
						<button>Order Now</button>
					</div>
				</div>
				
			</div>
		</section>
		<section class="discover">
			<div class="wrapper">
				<div class="title_block">
					<span>Discover</span>
					<h2>Choose & Enjoy</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
				</div>
			</div>
				<div class="slider_food">
					<div class="slider"  >
						<img src="img/discover_img_1.webp" alt="">
						<img src="img/discover_img_2.webp" alt="">
						<img src="img/discover_img_3.webp" alt="">
						<img src="img/discover_img_4.webp" alt="">
					</div>
				</div>
			<div class="wrapper">
				<div class="box_img">
					<div class="box">
						<div class="img_box">
							<img src="img/tray_in_today_1.webp" alt="">
							<div class="text_img">
								<h2>Try it today</h2>
								<p>Most<br>popular<br>pasta</p>
							</div>
						</div>
					</div>
					<div class="box img_2">
						<div class="img_box">
							<img src="img/tray_in_today_2.webp" alt="">
							<div class="text_img">
								<h2>Try it today</h2>
								<p>Most fun<br>more taste</p>
							</div>
						</div>
						<div class="img_box">
							<img src="img/tray_in_today_3.webp" alt="">
							<div class="text_img">
								<h2>Try it today</h2>
								<p>Fresh & Chili</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="reservation">
			<div class="wrapper">
				<div class="title_block">
					<span>Reservation</span>
					<h2>Book Your Table</h2>
				</div>
				<!-- Форма обратной связи -->
				<div class="form" >
					<form action="send.php" method="post">
						<input type="text" placeholder="Name" required="">
						<input type="text" placeholder="Email" required="">
						<input type="text" placeholder="Date" required="">
						<input type="text" placeholder="Time" required="">
						<input type="text" placeholder="People" required="">
						<input class="submit" type="submit" value="Find a table">
					</form>
				</div>
			</div>
		</section>
	</main>
	<footer class="footer" id="contacts">
		<img class="bg" src="img/footer_bg.webp" alt="">
		<div class="wrapper">
			<div class="footer_content">
					<img class="logo_footer" src="img/footer_logo.webp" alt="">
				<div class="text_footer">
					<div class="footer_box">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viver ra maecenas accumsan lacus vel facilisis. </p>
					</div>
					<div class="footer_box">
						<div class="contact_location"><div><img src="img/location.webp" alt=""></div><p>Main Road, Building Name, Country</p></div>
						<div class="contact_location"><div><img src="img/email.webp" alt=""></div><p>info@companyname.com</p></div>
					</div>
				</div>
					<div class="copyright">
						<p>© Company Name 2020. All rights reserved.</p>
						<div class="social_icons">
							<a href="#"><img src="img/instagram.webp" alt=""></a>
							<a href="#"><img src="img/facebook.webp" alt=""></a>
							<a href="#"><img src="img/twitter.webp" alt=""></a>
							<a href="#"><img src="img/whatsApp.webp" alt=""></a>
						</div>
					</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/slider.js"></script>
</body>
</html>