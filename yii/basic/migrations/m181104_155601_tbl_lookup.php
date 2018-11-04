<?php

use yii\db\Migration;

/**
 * Class m181104_155601_tbl_lookup
 */
class m181104_155601_tbl_lookup extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_lookup', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'code'=>$this->integer(),
            'type'=>$this->string(),
            'position'=>$this->integer()->defaultValue(0),
            //  'photo'=>$this->string()->defaultValue(null)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181104_155601_tbl_lookup cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181104_155601_tbl_lookup cannot be reverted.\n";

        return false;
    }
    */
}
