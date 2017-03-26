<div class="test_book_overview">
	<div class="test_settings">
	</div>
	<div class="test_content">
		<div class="row">
			<div class="col-md-3">
				<img src="img/lolita.jpg" width="150" height="200" class="book_image">
			</div>
			<div class="col-md-9">
				<div class="test_text">
					Первая публикация: 1995 г. <br><br>
					Автор: Владимир Владимирович Набоков <br><br>
					Жанр: Роман <br><br>
				</div>
				<div class="test_btns">
					<button class="buy">
						<span class="glyphicon glyphicon-shopping-cart"></span>
						Купить
					</button>
					<button class="write_review">
						<span class="glyphicon glyphicon-pencil"></span>
						Написать рецензию
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="test_books_reviews">
	<div class="test_settings">

		<div class="find">Найдено 48 публикаций</div>

		<div class="icon">
			<span class="glyphicon glyphicon-cog"></span>
		</div>
	</div>
	<div class="reviews">

		<div class="single_review">
			
			<div class="row">

				<div class="col-md-9">
					<div class="stats">
						Рейтинг: <span class="number">9.1</span>
						Просмотров: <span class="number">135к</span>
					</div>

					<div class="short">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas, quam quis egestas ornare, sapien eros aliquam turpis, non bibendum turpis orci ac ipsum. Sed varius, est sit amet egestas pellentesque, dolor ante eleifend nulla, ut gravida ex sem non quam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas, quam quis egestas ornare, sapien eros aliquam turpis, non bibendum turpis orci ac ipsum. Sed varius, est sit amet egestas pellentesque, dolor ante eleifend nulla, ut gravida ex sem non quam.
					</div>
				</div>

				<div class="col-md-3">
					<div class="user_info">
						<span class="text">
							<strong>LOREM IPSUM</strong>
						</span>
						<span class="glyphicon glyphicon-user icon"></span>
					</div>
				</div>

			</div>

		</div>

		<?php for($i = 0; $i <= 10; $i++) : ?>

		<div class="single_review">
			
			<div class="row">

				<div class="col-md-9">
					<div class="stats">
						Рейтинг: <span class="number">9.1</span>
						Просмотров: <span class="number">135к</span>
					</div>

					<div class="short">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas, quam quis egestas ornare, sapien eros aliquam turpis, non bibendum turpis orci ac ipsum. Sed varius, est sit amet egestas pellentesque, dolor ante eleifend nulla, ut gravida ex sem non quam.
					</div>
				</div>

				<div class="col-md-3">
					<div class="user_info">
						<span class="text">
							<strong>LOREM IPSUM</strong>
						</span>
						<span class="glyphicon glyphicon-user icon"></span>
					</div>
				</div>

			</div>

		</div>

		<?php endfor; ?>

		<div class="show_more">
			<span class="glyphicon glyphicon-repeat"></span>
		</div>
	</div>
</div>