<?php

namespace frontend\models;

use common\models\User;
use Yii;
use yii\db\ActiveRecord;
use frontend\models\Books;

class Reviews extends ActiveRecord
{
	public function getBook()
	{
		return $this->hasOne(Books::className(), ['id' => 'book_id']);
	}

	public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }
}