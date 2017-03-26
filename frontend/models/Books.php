<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use frontend\models\Authors;
use frontend\models\Categories;

class Books extends ActiveRecord 
{
	public function getAuthor()
	{
		return $this->hasOne(Authors::className(), ['id' => 'author_id']);
	}

	public function getCategory()
	{
		return $this->hasOne(Categories::className(), ['id' => 'category_id']);
	}
}