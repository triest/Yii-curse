<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblTagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Tags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-tag-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Tag', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'frequency',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
