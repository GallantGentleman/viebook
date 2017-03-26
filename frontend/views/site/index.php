<?php
use yii\helpers\Html;

$this->title = "VieBook - most friendly books community";

?>

<div class="welcome_text">
    <h4 class="text-center">
        When was the last time you read a book, or a substantial magazine article?
        Do your daily reading habits center around
        <span style="color: #1DA1F2;">tweets</span>
        ,
        <span style="color: #3B5998;">Facebook</span>
        updates, or the directions on your instant oatmeal packet?
        If you’re one of countless people who don’t make a habit of reading regularly, you might be missing out:
        reading has a significant number of benefits
    </h4>
</div>
<div class="test_books_reviews">
<div class="reviews">
    <?php for($i = 0; $i < count($reviews); $i++): ?>
    <div class="single_review">
        <div class="row">

            <div class="col-md-9">
                <h3 class="review_title"><?= $reviews[$i]->title ?></h3>
                <div class="stats">
                    Рейтинг: <span class="number badge"><?= $reviews[$i]->rating ?></span>
                    Просмотров: <span class="number badge"><?= $reviews[$i]->views ?></span>
                    Комментариев: <span class="number badge"><?= $reviews[$i]->views ?></span>
                </div>

                <div style="color: black; padding: 4px 0;">
                    Книга: <?= Html::a($books[$i]->title, ['site/search', 'q' => $books[$i]->title]); ?>
                    <br>
                    Категория: <?= $books_category[$i]->name ?>
                </div>

                <div class="short">
                    <?= $reviews[$i]->review_text ?>
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
</div>
</div>