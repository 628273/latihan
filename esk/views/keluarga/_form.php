<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Keluarga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keluarga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contact_person_id')->textInput() ?>

    <?= $form->field($model, 'employee_person_id')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'hubungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_hubungan')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'town_or_birth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dependent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
