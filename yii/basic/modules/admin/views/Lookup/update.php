<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblLookup */

$this->title = 'Update Tbl Lookup: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Lookups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-lookup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
