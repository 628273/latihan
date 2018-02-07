<?php

use yii\db\Migration;

/**
 * Handles the creation of table `kabupaten`.
 */
class m180207_114437_create_kabupaten_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('kabupaten', [
            'id' => $this->primaryKey(),
            'nama' => 'varchar(25)',
            'deskripsi' => 'varchar(25)',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('kabupaten');
    }
}
