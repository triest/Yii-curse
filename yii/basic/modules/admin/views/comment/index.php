<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblCommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'content',
            'status',
            'create_time',
            'email:email',
            //'url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
