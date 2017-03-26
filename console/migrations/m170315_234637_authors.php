<?php

use yii\db\Migration;

class m170315_234637_authors extends Migration
{
    public function up()
    {
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'surname' => $this->string(),
            'second_name' => $this->string(),
            'birthday' => $this->string(),
            'biography' => $this->text(),
            'image' => $this->string(), 
        ]);
    }

    public function down()
    {
        echo "m170315_234637_authors cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
