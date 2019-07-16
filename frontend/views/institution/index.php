<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InstitutionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Institutions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institution-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Institution', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ins_id',
            'ins_name',
            'ins_phonenum',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>