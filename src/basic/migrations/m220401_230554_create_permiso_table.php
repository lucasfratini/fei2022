<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%permiso}}`.
 */
class m220401_230554_create_permiso_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%permiso}}', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string(100),
            'is_staf' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%permiso}}');
    }
}
