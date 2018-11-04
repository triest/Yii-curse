<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblComment */

$this->title = 'Create Tbl Comment';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
