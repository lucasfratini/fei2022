<?php

use yii\db\Migration;

/**
 * Class m220401_225159_fecha_de_nacimiento
 */
class m220401_225159_fecha_de_nacimiento extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('usuario', 'nacimiento', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('usuario', 'nacimiento');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220401_225159_fecha_de_nacimiento cannot be reverted.\n";

        return false;
    }
    */
}