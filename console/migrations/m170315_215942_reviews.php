<?php

use yii\db\Migration;

class m170315_215942_reviews extends Migration
{
    public function up()
    {
        $this->createTable('reviews', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'review_text' => $this->text()->notNull(),
            'rating' => $this->float()->notNull(),
            'created_at' => $this->string()->notNull(),
            'shedule_date' => $this->string(),
            'active' => $this->integer(),
            'book_id' => $this->integer()->notNull(),
            'views' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m170315_215942_reviews cannot be reverted.\n";

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
