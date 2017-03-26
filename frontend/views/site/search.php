<?php
use yii\helpers\Html;
?>

<?php if ($book !== null): ?>

	<div class="test_book_overview">
		<div class="test_settings">
		</div>
		<div class="test_content">
			<div class="row">
				<div class="col-md-3">
					<img src="img/books/<?=@$book->image?>" width="150" height="200" class="book_image">
				</div>
				<div class="col-md-9">
					<div class="test_text">
						Первая публикация: <?= @$book->year ?> г.<br><br>
						Автор: <?= @$author_name ?> <br><br>
						Жанр: <?= @$category->name ?> <br><br>
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

<?php endif; ?>

<div class="test_books_reviews">
	<div class="test_settings">

		<?php

		$word = "публикации";

		if ($amount > 4) {
			$word = "публикаций";
		} else if ($amount <= 1) {
			$word = "публикация";
		}
		?>

		<div class="find">Найдено <?= $amount ?> <?= $word ?></div>

		<div class="icon">
			<span class="glyphicon glyphicon-cog"></span>
		</div>
	</div>
	<div class="reviews">
		<?php if ($amount > 0): ?>
		<?php for($i = 0; $i < $amount; $i++) : ?>

			<div class="single_review">

				<div class="row">

					<div class="col-md-9">
						<h3 class="review_title"><?= $reviews[$i]->title ?></h3>
						<div class="stats">
							Рейтинг: <span class="number badge"><?= $reviews[$i]->rating ?></span>
							&nbsp;&nbsp;
							Просмотров: <span class="number badge"><?= $reviews[$i]->views ?></span>
							&nbsp;&nbsp;
							Комментариев: <span class="number badge"><?= $reviews[$i]->views ?></span>
						</div>

						<?php if ($book == null): ?>

							<div style="color: black; padding: 4px 0;">
								Книга: <?= $for_books[$i]->title; ?>
							</div>

						<?php endif; ?>

						<div class="short">
							<?= $reviews[$i]->review_text ?>
						</div>
					</div>

					<div class="col-md-3">
						<div class="user_info">
							<ul>
								<li>
									<img src="img/users/admin.png" width="80" height="80" class="icon">
								</li>
								<li>
									<span class="text">
										<strong><?= $authors[$i]->username ?></strong>
									</span>
								</li>
							</ul>

						</div>
					</div>

				</div>

			</div>

		<?php endfor; ?>
		<?php endif; ?>

		<?php if ($amount >= 3): ?>

		<div class="show_more">
			<span class="glyphicon glyphicon-repeat"></span>
		</div>

		<?php endif; ?>
	</div>
</div>
