<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'person_id',
            'nik',
            'nama',
            'title',
            'tanggal_masuk',
            //'employee_category',
            //'organization',
            //'job',
            //'band',
            //'location',
            //'kota',
            //'no_hp',
            //'email:email',
            //'gender',
            //'status_pernikahan',
            //'agama',
            //'tgl_lahir',
            //'kota_lahir:ntext',
            //'start_date_assignment',
            //'admins',
            //'nik_atasan',
            //'nama_atasan',
            //'medical_admin',
            //'section',
            //'department',
            //'division',
            //'bgroup',
            //'egroup',
            //'directorate',
            //'area',
            //'tgl_masuk',
            //'status',
            //'status_employee',
            //'start_date_status',
            //'end_date_status',
            //'bp',
            //'bi',
            //'edu_lvl',
            //'edu_faculty:ntext',
            //'edu_major:ntext',
            //'edu_institution',
            //'posisi',
            //'last_update_date',
            //'salary',
            //'tunjangan',
            //'tunjangan_jabatan',
            //'structural',
            //'functional',
            //'no_ktp',
            //'suku',
            //'golongan_darah',
            //'no_npwp',
            //'alamat:ntext',
            //'nama_ibu',
            //'dpe',
            //'kode_kota',
            //'position_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
