<?php

use yii\db\Migration;

/**
 * Class m180207_112623_create_kota
 */
class m180207_112623_create_kota extends Migration
{
    /**
     * @inheritdoc
     */
     public function safeUp()
    {
        $this->createTable('kota', [
            'id' => $this->primaryKey(),
            'nama' => 'varchar(25)',
            'deskripsi' => $this->string(25)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
         $this->dropTable('kota');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180207_112623_create_kota cannot be reverted.\n";

        return false;
    }
    */
}
