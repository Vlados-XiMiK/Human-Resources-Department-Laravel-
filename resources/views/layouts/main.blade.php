<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1200">
	<!-- Для соц.мереж -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<!-- Шрифти -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
	<!-- Підключення -->
	<link rel="stylesheet" href="{{ asset ('css/style.css') }}"/>
	<script src="js/app.js" defer></script>
	<link rel="shortcut icon" href="/images/LOGO1.png" type="image/png">
	<title>Відділ кадрів</title>
</head>
<body>
	

	
	<div class="main">
		<div class="container">
			<!-- ************************************************************************************************************************************************ -->
			<!-- Секція заголовку -->
		<div class="header-line">
			<div class='header-logo'>
                <img src="images/LOGO1.png" alt="Помилка фото">
            </div>

				<!-- Меню навігації -->

		  <div class="menu">
			<a class="menu-item" href="/" >Головна</a>
			<a class="menu-item" href="/jobs" >Вакансії</a>
			<a class="menu-item" href="/news" >Новини</a>
		  </div>
<!-- CSS розбиття -->
		  <div class='cart'>
                
		</div>

		  		<!-- Зв`язок з нами -->

		  <div class='phone'>
			<div class='phone-holder'>

				<div class='phone-img'>
					<img src="images/phone.png" alt="Помилка фото">
				</div>

				<div class='number'><a class='num' href=''> +38(095) 123-45-67</a></div>
			</div>

			<div class='phone-text'>
				Зв'язок з нами
			</div>
		</div>

			<!-- Кнопка авторизації -->

			<div class='button'>
                <a href="/login"  class="wave-btn">
                    <span class="wave-btn__text">Особистий кабінет</span>
                    <span class="wave-btn__waves"></span>
                    </a>
            </div>

		</div>
		<!-- ************************************************************************************************************************************************ -->
					<!-- Основна секція -->

		@yield('welcome')




		<!-- ************************************************************************************************************************************************ -->
		<!-- Нижній колонтитул -->

		<div class="footer">
		<div class='footer-line'>
			<div class='footer-logo'>
				<img src="images/LOGO1.png" alt="Помилка фото">
			</div>

			<div class='foot-menu'>
				<a class='foot-item' href="">Політика <br> конфіденційності</a>
				<a class='foot-item1' href="">Згода на обробку <br> персональних даних</a>
			</div>

			<div class="social_network">
				<div class="vayus facebook">
				  <a href="https://www.facebook.com/kntu.net.ua" target="_blank">
				<span><i class="fab fa-facebook-f"></i></span>
			  
				</div>
				
				<div class="vayus instagram">
				  <a href="https://www.instagram.com/kntu.zvo/?hl=ru" target="_blank">
				<span><i class="fab fa-instagram"></i></span>
			  </a>
				</div>
				<div class="vayus telegram">
				  <a href="https://t.me/joinchat/IDDfiBeD0sWi4XaC" target="_blank">
				<span><i class="fab fa-telegram"></i></span>
				</div>
				<div class="vayus youtube">
				  <a href="https://www.youtube.com/channel/UC7oozvQhiNTmgrPv5lX63Tg" target="_blank">
				<span><i class="fab fa-youtube"></i></span>
				</div>
				</div>   

		</div>
	</div>




	  </div>
	</div>  	
</body>
</html>