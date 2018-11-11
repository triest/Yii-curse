<?php
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 11.11.2018
 * Time: 18:10
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::dropDownList('status',  $post->status,[1=>"Не проверен",2=>"Опубликован",3=>"Не подтвержден"], ['class'=>'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
