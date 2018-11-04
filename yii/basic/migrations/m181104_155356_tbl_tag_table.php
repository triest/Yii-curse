<?php

use yii\db\Migration;

/**
 * Class m181104_155356_tbl_tag_table
 */
class m181104_155356_tbl_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_tag', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'frequency'=>$this->string()->defaultValue(null)
           /* 'password'=>$this->string(),
            'profile'=>$this->integer()->defaultValue(0),*/
            //  'photo'=>$this->string()->defaultValue(null)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181104_155356_tbl_tag_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181104_155356_tbl_tag_table cannot be reverted.\n";

        return false;
    }
    */
}
