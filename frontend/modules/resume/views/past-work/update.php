<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProfilePastWork */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Profile Past Work',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profile Past Works'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="profile-past-work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
