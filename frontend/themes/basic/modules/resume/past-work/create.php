<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProfilePastWork */

$this->title = Yii::t('app', 'Create Profile Past Work');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profile Past Works'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-past-work-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
