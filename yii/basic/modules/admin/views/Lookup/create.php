<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblLookup */

$this->title = 'Create Tbl Lookup';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Lookups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-lookup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
