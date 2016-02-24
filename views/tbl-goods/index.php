<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-goods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'count',
            'email_provider:email',
            'create_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
