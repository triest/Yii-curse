<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'email:email',
            'password',
            'profile',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
