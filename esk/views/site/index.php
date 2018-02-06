<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$data = Yii::$app->user->identity->karyawan;
?>

<p>
	User Login : <?= Yii::$app->user->identity->username; ?><br />
	Nama Saya <?= $data->nama ?> jabatan saya <?= $data->title ?>
	<br />
	Berikut data keluarga saya:
	<ol>
		<?php foreach($data->keluargas as $rows){ ?>
		<li><?= $rows->nama ?></li>
		<?php } ?>
	</ol>
</p>