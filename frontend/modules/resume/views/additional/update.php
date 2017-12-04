<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProfileResume */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Profile Resume',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profile Resumes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="profile-resume-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
