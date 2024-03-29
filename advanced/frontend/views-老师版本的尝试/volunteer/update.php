<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Volunteer */

$this->title = 'Update Volunteer: ' . $model->stu_id;
$this->params['breadcrumbs'][] = ['label' => 'Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stu_id, 'url' => ['view', 'id' => $model->stu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="volunteer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
