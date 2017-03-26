<?php

use yii\db\Migration;

class m170315_234421_books extends Migration
{
    public function up()
    {
        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'year' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'category_id' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m170315_234421_books cannot be reverted.\n";

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
