<?php

use yii\db\Migration;

/**
 * Class m181104_155542_tbl_post
 */
class m181104_155542_tbl_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_post', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            //'d'=>$this->text(),
            'status'=>$this->text(),
            'create_time'=>$this->date(),
            'update_time'=>$this->string(),

          /*  'viewed'=>$this->integer(),
            'user_id'=>$this->integer(),
            'status'=>$this->integer(),
            'category_id'=>$this->integer(),*/


        ]);
    }

     /*ключи*/



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181104_155542_tbl_post cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181104_155542_tbl_post cannot be reverted.\n";

        return false;
    }
    */
}
