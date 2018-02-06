<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\KeluargaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keluarga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'contact_person_id') ?>

    <?= $form->field($model, 'employee_person_id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?= $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'tgl_hubungan') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'town_or_birth') ?>

    <?php // echo $form->field($model, 'dependent') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
