<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblGoods */

$this->title = 'Create Tbl Goods';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
