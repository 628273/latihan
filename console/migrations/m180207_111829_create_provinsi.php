<?php

use yii\db\Migration;

/**
 * Class m180207_111829_create_provinsi
 */
class m180207_111829_create_provinsi extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('provinsi', [
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
         $this->dropTable('provinsi');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180207_111829_create_provinsi cannot be reverted.\n";

        return false;
    }
    */
}
