<!--
ЗАДАЧА: Вывести три поста (автор и текст поста) из своей таблицы twitter.
ЧТО НУЖНО СДЕЛАТЬ:
1. Подключится к своей Базе данных.
2. Сделать запрос к таблице twitter.
3. Вывести три поста.

Внизу читай комментарии, где что выводить.

Если закончил, сделай добавление нового твита.

Если сделал, добавление нового твита, создай таблицу 'img', в которой хранятся:
	- аватар автора,
	- картинка поста.
	
Выведи на странице изображения из таблицы 'img'.
-->

<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<!-- ШАПКА -->
	
	<div class="header border-bottom pb-2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-xl-5">
					<div class="row">
						<div class="col-4">
							<img src="img/icons8-home-50.png" class="w-25">
							<a href="">Домой</a>
						</div>
						<div class="col-4 px-0">
							<img src="img/icons8-notification-50.png" class="w-25">
							<a href="">Уведомления</a>
						</div>
						<div class="col-4">
							<img src="img/icons8-new-post-50.png" class="w-25">
							<a href="">Сообщения</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-xl-3">
					<img class="w-25" src="img/icons8-twitter-50.png" >
				</div>
				<div class="col-sm-12 col-md-4 col-xl-4">
					<input type="" name="">
					<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
					<button type="button" class="btn btn-primary">Твитнуть</button>					
				</div>
			</div>
		</div>
	</div>
	<!-- ДИВ С КОНТЕНТОМ -->						
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> <!-- ПРОФИЛЬ-->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- Описание профиля -->
					<div class=" bg-white">
						<!--фон-->
						<a href=""><img src="img/background.jpg" class="img-fluid"></a>
						<!--карточка-->
						<div class="row">
							<div class="col-4">
								<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
							</div>
							<div class="col-8">
								<div>
									<a href="">Mary Smith</a>
								</div>
								<div>
									<a href="">@MarySmith</a>
								</div>
							</div>
						</div>
						<!--Статистика-->
						<div class="row pt-1 pb-1 pr-1 pl-1">
							<div class="col-6">
								<a href="">
									<b>Твиты</b><br>276
								</a>
							</div>

							<div class="col-6">
								<a href="">
									<b>Читаемые</b><br> 106
								</a>
							</div>										
						</div>	
					</div>

					<!-- Актуальные темы для вас-->
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3" >
						<div class="">
							<h6>Актуальные темы для вас</h6>
						</div>

						<div>
							<a href="">#inktober</a>
						</div>
						<div>
							<a href="">#movies</a>
						</div>
						
					</div>
				</div>

				<!-- Средняя колонка: Лента твитов: добавить, твиты -->
				<div class="col-sm-12 col-md-8 col-xl-6" style="">
					<div class="pt-2 bg-white">
						<div class="row">
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-10">

							<form action="insert.php" method="GET">
							
							<input type="text" placeholder="АВтор" name="user">
							<input type="text" placeholder="Твит" name="text">
							<input type="text" placeholder="картинка" name="img">
							

							
							<button class="btn bg-primary text-light">Твитнуть</button>

							</form>
							
							</div>
						</div>
						<!-- новый пост -->
						<div class="row mt-4">
							<div class="col-2">
							<?php
								$text = $_GET['text'];
								if($text != ""){
									echo "<img class='w-75 rounded-circle' src='img/avatar.jpg'>";
								}
							?>
							</div>
							<div class="col-xl-10">
									<h5>
										<?php
										echo $_GET['user'];
										?>
									</h5>
									<p>
										<?php
										echo $_GET['text'];
										?>
									</p>
							</div>
						</div>

						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php

											$connect = mysqli_connect("127.0.0.1","root","","twitter");
											$text_query = 'SELECT * FROM twits';
											$query = mysqli_query($connect,$text_query);


											
											// запрос для ввода в таблицу


											$result = $query->fetch_assoc();
											echo $result['user'];

											

										?>
									
									</h5>
								</div>
								<div>
									<p>
									
										<?php
											echo $result['text'];
										?>
									</p>

									<?php
										echo "<img class = 'w-100'src='".$result['img']."'>";
									?>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									
										<?php
											$result2 = $query->fetch_assoc();
											echo $result2['user'];


										?>

									</h5>
								</div>
								<div>
									<p>									
										<?php						
											echo $result2['text'];
										?>
									</p>

										<?php										
											echo "<img class = 'w-100'src='".$result2['img']."'>";
										?>								
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									<?php
											$result3 = $query->fetch_assoc();
											echo $result3['user'];
										?>
									</h5>
								</div>
								<div>
									<p>
									<?php											
											echo $result3['text'];

										?>						
									</p>
									<?php										
											echo "<img class = 'w-100'src='".$result3['img']."'>";
										?>					
								</div>
							</div>
						</div>

						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/bogdan.jpg" class="rounded-circle w-75">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									<?php
											$result4 = $query->fetch_assoc();
											echo $result4['user'];
										?>
									</h5>
								</div>
								<div>
									<p>
										<?php											
											echo $result4['text'];
										?>						
									</p>
										<?php										
											echo "<img class = 'w-100'src='".$result4['img']."'>";
										?>					
								</div>
							</div>
						</div>

						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/oleg.jpg" class="rounded-circle w-75">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											$result5 = $query->fetch_assoc();
											echo $result5['user'];
										?>
									</h5>
								</div>
								<div>
									<p>
										<?php											
											echo $result5['text'];
										?>						
									</p>
										<?php										
											echo "<img class = 'w-100'src='".$result5['img']."'>";
										?>					
								</div>
							</div>
						</div>

						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/misha.png" class="rounded-circle w-75">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											$result6 = $query->fetch_assoc();
											echo $result6['user'];
										?>
									</h5>
								</div>
								<div>
									<p>
										<?php											
											echo $result6['text'];
										?>						
									</p>
										<?php										
											echo "<img class = 'w-100'src='".$result6['img']."'>";
										?>					
								</div>
							</div>
						</div>

				</div>
				<!-- правая колонка -->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- "Читаемые" -->
					<div class="bg-white pt-3 pb-3 pl-3 pr-3">
						<!-- форму создать здесь -->
						<form action="insert2.php" method="GET">
							<input placeholder="Имя" name="name" class="mt-1">
							<input placeholder="Канал" name="channel" class="mt-1">
							<input placeholder="IMG" name="img" class="mt-1">
							<button class="btn btn-primary mt-1">Добавить в читаемые</button>
						</form>
						<div class="col-4">
							<h6>Читаемые</h6>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<a href=""><?php

											$connect1 = mysqli_connect("127.0.0.1","root","","twitter");
											$text_query1 = 'SELECT * FROM followings';
											$query1 = mysqli_query($connect1,$text_query1);


											
											// запрос для ввода в таблицу


											$result1 = $query1->fetch_assoc();
											echo "<img class = 'w-100'src='".$result1['img']."'>";

											

										?></a> <!-- аватарка, внутри ссылки картинка-->
							</div>
							<div class="col-xl-8">
								<div>
									<a href="">
										<?php 
											echo $result1['name'];
										 ?>
									</a>  <!-- имя юзера -->
									<span style="font-size: 12px;"><?php 
											echo $result1['channel'];
										 ?></span> <!--название аккаунта-->
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-4">
								<a href=""><img class="w-100 rounded-circle" src="images/2.jpg"></a> <!-- аватарка, внутри ссылки картинка-->
							</div>
							<div class="col-xl-8">
								<div>
									<a href="">CHEBUREK</a>  <!-- имя юзера -->
									<span style="font-size: 12px;"> @CHEBUREK </span> <!--название аккаунта-->
								</div>
							</div>
						</div>

					</div>
					<!-- Ссылки © Twitter, 2018 -->
					
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3">
						<div >
							© Twitter, 2018
							<a href="">О нас</a>
							<a href="">Справочный центр</a>
							<a href="">Условия</a>
							<a href="">Политика конфиденциальности</a>
							<a href="">Файлы cookie</a>
							<a href="">О рекламе</a>
							<a href="">Бренд</a>
							<a href="">Блог</a>
							<a href="">Состояние</a>
							<a href="">Приложения</a>
							<a href="">Вакансии</a>
							<a href="">Маркетинг</a>
							<a href="">Компаниям</a>
							<a href="">Разработчикам</a>
						</div>
						<div class="d-flex">
							<a href="">Рекламируйте вместе с Твиттером</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>