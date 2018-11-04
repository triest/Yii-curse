<?php

use yii\db\Migration;

/**
 * Class m181104_155552_tbl_comment
 */
class m181104_155552_tbl_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_comment', [
            'id' => $this->primaryKey(),
            'content'=>$this->string(),
            'status'=>$this->integer()->defaultValue(0),
            'create_time'=>$this->date('Y-m-d H:i:s'),
            'email'=>$this->string()->defaultValue(null),
            'url'=>$this->string()->defaultValue(null),

           // 'profile'=>$this->integer()->defaultValue(0),
            //  'photo'=>$this->string()->defaultValue(null)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181104_155552_tbl_comment cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181104_155552_tbl_comment cannot be reverted.\n";

        return false;
    }
    */
}
