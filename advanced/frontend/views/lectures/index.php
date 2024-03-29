<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LecturesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lectures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lectures-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lectures', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'lecture_id',
            'lecturer',
            'lecture_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
