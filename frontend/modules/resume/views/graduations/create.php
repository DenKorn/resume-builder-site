<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProfileGraduations */

$this->title = Yii::t('app', 'Create Profile Graduations');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profile Graduations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-graduations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
