<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProfileResume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-resume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user__id')->textInput() ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'desired_fee')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
