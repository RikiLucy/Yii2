<?php

use yii\db\Migration;

/**
 * Handles the creation for table `articles`.
 */
class m160806_153938_create_articles_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'text' => $this->string(),
            'anotation' => $this->string(),
            'date' => $this->date(),
            'author' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('articles');
    }
}
